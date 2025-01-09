<?php

function easy_video_player_display_extensions()
{
    //echo '<div class="wrap">';
    //echo '<h2>' .__('Easy Video Player Extensions', 'easy-video-player') . '</h2>';
    echo '<link type="text/css" rel="stylesheet" href="'.EASY_VIDEO_PLAYER_URL.'/extensions/easy-video-player-extensions.css" />' . "\n";
    
    $extensions_data = array();

    $extension_1 = array(
        'name' => 'MediaElement Skin 1',
        'thumbnail' => EASY_VIDEO_PLAYER_URL.'/extensions/images/evp-mediaelement-skin-1.png',
        'description' => 'A clean skin for the Easy video player MediaElement template',
        'page_url' => 'https://noorsplugin.com/wordpress-video-plugin/',
    );
    array_push($extensions_data, $extension_1);
    
    $extension_2 = array(
        'name' => 'User Only Videos',
        'thumbnail' => EASY_VIDEO_PLAYER_URL.'/extensions/images/evp-user-only-videos.png',
        'description' => 'Restrict videos to WordPress users or users with specific roles',
        'page_url' => 'https://noorsplugin.com/easy-video-player-user-only-videos/',
    );
    array_push($extensions_data, $extension_2);
    
    $extension_3 = array(
        'name' => 'Video Schema',
        'thumbnail' => EASY_VIDEO_PLAYER_URL.'/extensions/images/evp-schema.png',
        'description' => 'Help search engines discover your videos by adding schema data',
        'page_url' => 'https://noorsplugin.com/easy-video-player-schema/',
    );
    array_push($extensions_data, $extension_3);
    
    $extension_4 = array(
        'name' => 'Disable Right Click',
        'thumbnail' => EASY_VIDEO_PLAYER_URL.'/extensions/images/evp-disable-right-click.png',
        'description' => 'Disable right click on the Easy Video Player',
        'page_url' => 'https://noorsplugin.com/easy-video-player-disable-right-click/',
    );
    array_push($extensions_data, $extension_4);
    
    //Display the list
    $output = '';
    foreach ($extensions_data as $extension) {
        $output .= '<div class="easy_video_player_extensions_item_canvas">';

        $output .= '<div class="easy_video_player_extensions_item_thumb">';
        $img_src = $extension['thumbnail'];
        $output .= '<img src="' . $img_src . '" alt="' . $extension['name'] . '">';
        $output .= '</div>'; //end thumbnail

        $output .='<div class="easy_video_player_extensions_item_body">';
        $output .='<div class="easy_video_player_extensions_item_name">';
        $output .= '<a href="' . $extension['page_url'] . '" target="_blank">' . $extension['name'] . '</a>';
        $output .='</div>'; //end name

        $output .='<div class="easy_video_player_extensions_item_description">';
        $output .= $extension['description'];
        $output .='</div>'; //end description

        $output .='<div class="easy_video_player_extensions_item_details_link">';
        $output .='<a href="'.$extension['page_url'].'" class="easy_video_player_extensions_view_details" target="_blank">View Details</a>';
        $output .='</div>'; //end detils link      
        $output .='</div>'; //end body

        $output .= '</div>'; //end canvas
    }
    echo $output;
    
    //echo '</div>';//end of wrap
}
