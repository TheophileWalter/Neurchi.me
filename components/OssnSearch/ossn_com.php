<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */

define('__OSSN_SEARCH__', ossn_route()->com . 'OssnSearch/');
require_once(__OSSN_SEARCH__ . 'classes/OssnSearch.php');

function ossn_search() {
    ossn_register_page('search', 'ossn_search_page');
    ossn_add_hook('search', "left", 'search_menu_handler');
    ossn_add_hook('search', "type:all", 'search_users_groups_handler');
    $url = OssnPagination::constructUrlArgs(array(
            'type'
    ));
    ossn_register_menu_link('all', 'search:all', "search?type=all{$url}", 'search');

    ossn_extend_view('css/ossn.default', 'css/search');
}

function search_menu_handler($hook, $type, $return) {
    $return[] = ossn_view_menu('search');
    return $return;
}

function ossn_search_page($pages) {
    $page = $pages[0];
    if (empty($page)) {
        $page = 'search';
    }
    ossn_trigger_callback('page', 'load:search');
    switch ($page) {
        case 'search':
            $query = input('q');
            $type = input('type');
            $title = ossn_print("search:result", array($query));
            if (empty($type)) {
                $params['type'] = 'all';
            } else {
                $params['type'] = $type;
            }
            $type = $params['type'];
            if (ossn_is_hook('search', "type:{$type}")) {
                $contents['contents'] = ossn_call_hook('search', "type:{$type}", array('q' => input('q')));
            }
            $contents = array('content' => ossn_plugin_view('search/pages/search', $contents),);
            $content = ossn_set_page_layout('search', $contents);
            echo ossn_view_page($title, $content);
            break;
        default:
            ossn_error_page();
            break;
    }
}

// Search both users and groups
function search_users_groups_handler($hook, $type, $return, $params) {

    // Users
    $Pagination    = new OssnPagination;
    $users         = new OssnUser;
    $data          = $users->searchUsers(array(
            'wheres' => "CONCAT(u.first_name, ' ', u.last_name) LIKE '%{$params['q']}%'"
    ));
    $count         = $users->searchUsers(array(
            'wheres' => "CONCAT(u.first_name, ' ', u.last_name) LIKE '%{$params['q']}%'",
            'count' => true
    ));
    $user['users'] = $data;
    $search        = ossn_plugin_view('output/users', $user);


    // Groups
    $groups = new OssnGroup;
    $data   = $groups->searchGroups($params['q']);
    $count  += $groups->searchGroups($params['q'], array(
            'count' => true
    ));
    
    $group['groups'] = $data;
    $search          .= ossn_plugin_view('groups/search/view', $group);

    $search .= ossn_view_pagination($count);
    if($count == 0) {
            return ossn_print('ossn:search:no:result');
    }
    return $search;

}

ossn_register_callback('ossn', 'init', 'ossn_search');
