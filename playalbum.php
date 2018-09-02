<!doctype html>
<html>
<head>
<?php require_once('includes/basic_head.php'); ?>
    <link rel="stylesheet" href="/css/playalbum.css">
    <title>MusicTool: playalbum</title>
</head>
<body>

<div class="container">

    <div class="row ">
        <div class="CoverImageContainer">
            <img src="/assets/uploads/covers/mj1300x1300.jpg" class="ResponsiveCoverImage">
        </div>
        <div class="AlbumInfoContainer">
            <div cllass="AlbumInfoArtistName">Michael Jackson</div>
            <div cllass="AlbumInfoAlbumName">History</div>
        </div>
        <div class="AlbumActionsContainer">
            t
        </div>
    </div>

    <div class="row" style="width:100%>
        <div class="SetScrollbars">
            <table class="AlbumTable">

                <?php
                    $aTracks = array(
                        1 => array(
                            'song' => 'Triller',
                            'artist' => 'Michael Jackson',
                        ),
                        2 => array(
                            'song' => 'Dirt Dianna',
                            'artist' => 'Michael Jackson',
                        ),
                        3 => array(
                            'song' => 'Leave me alone',
                            'artist' => 'Michael Jackson',
                        ),
                        4 => array(
                            'song' => 'Bad',
                            'artist' => 'Michael Jackson',
                        ),
                        5 => array(
                            'song' => 'Dangerous',
                            'artist' => 'Michael Jackson',
                        ),

                    );

                foreach($aTracks as $track => $trackDetails){
                    echo '
                            <tr>
                        <td class="SongListTracknumber">
                            <div class="SongListTrackNumberFont">'.$track.'</div>
                        </td>
                        <td class="SongListTrackInfo">
                            <div class="SongNameFont">'.$trackDetails['song'].'</div>
                            <div class="ArtistNameFont">'.$trackDetails['artist'].'</div>
                        </td>
                        <td class="Spacer5px">&nbsp;</td>
                        <td class="SongListPlayicon">
                            &nbsp;
                        </td>
                        <td class="Spacer5px">&nbsp;</td>
                        <td class="SongListMenu">
                            &nbsp;
                        </td>
                    </tr>
                ';
                }
                ?>

            </table>

            <p>Morbi eget nibh erat. Sed id vehicula orci. Quisque massa lacus, suscipit sit amet suscipit eget, suscipit quis libero. Nam elementum sodales enim a bibendum. Vestibulum eu quam nec quam rutrum malesuada. Donec elementum, sapien eget sagittis gravida, lorem arcu iaculis magna, ut ornare nibh orci ut felis. Pellentesque laoreet ornare nulla. Pellentesque fermentum eros sed ante faucibus, imperdiet venenatis turpis fringilla. Duis commodo, turpis vitae gravida rhoncus, arcu quam consectetur nibh, non tristique velit augue vel nisl. Integer lacinia gravida pharetra. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas at fermentum velit. Nulla facilisi. Phasellus sodales enim eros, et gravida ipsum feugiat et.</p>
            <br>
            <p>Aliquam a tincidunt nisl, eget mattis nisl. Cras viverra non sem et hendrerit. Duis in quam vitae urna tristique accumsan. Curabitur velit nibh, egestas nec rutrum quis, pulvinar nec enim. Duis aliquam massa a augue blandit, eu ornare elit pharetra. Curabitur lorem elit, sollicitudin eu arcu eu, ornare pharetra urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet pretium turpis. Donec sed ultricies ante, rhoncus facilisis purus. Ut imperdiet ipsum in convallis varius. Fusce imperdiet mi nec leo fringilla, vitae condimentum felis ultrices. Integer dictum vitae turpis non gravida. Proin felis massa, consequat vitae nunc eget, placerat sollicitudin lacus. Nunc et augue id arcu mollis convallis vitae id ante.</p>
            <br>

            </br><p>Pellentesque dapibus nunc dui, sit amet blandit leo porttitor eget. Integer eu neque aliquet, ullamcorper libero sed, dignissim dui. Integer porttitor euismod urna eget ullamcorper. Sed eget mauris purus. Pellentesque ultrices odio vel erat convallis auctor. Fusce luctus nisl massa, eu scelerisque nunc congue vel. Morbi vehicula, nisl ut faucibus bibendum, nulla mauris dictum massa, eget feugiat ante libero vitae nisl. Mauris dignissim mi vitae metus dignissim, ac pulvinar tortor accumsan. Quisque sapien dui, semper ac gravida bibendum, vehicula et augue. Sed vel malesuada orci. Phasellus id viverra turpis.</p>
            <p>Fusce velit tellus, viverra et dignissim quis, ornare id lectus. Pellentesque id nunc ultrices ipsum elementum tincidunt sed facilisis erat. Nam purus nibh, laoreet eu mattis vel, cursus sit amet ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse ante erat, pellentesque id nulla in, lacinia euismod arcu. Sed cursus, massa et dapibus fringilla, velit tellus laoreet massa, ac feugiat enim nisi id mauris. Praesent tincidunt nisi ac magna sollicitudin, sit amet ornare augue hendrerit. Donec sodales vel mauris sit amet accumsan. Nam blandit sit amet urna sit amet ultricies. Mauris imperdiet consectetur ligula, nec interdum sem. Proin imperdiet dolor at lacinia ullamcorper. Vivamus vitae magna nibh. Phasellus sed lorem tortor. Nullam pretium scelerisque elit nec porttitor. Ut commodo enim dolor, et suscipit urna euismod porttitor.</p>
            <p>In ultrices convallis aliquam. Nulla elementum vel purus quis suscipit. Maecenas mattis ipsum quis leo feugiat facilisis. Proin imperdiet massa et neque consequat consectetur. Suspendisse odio lectus, sollicitudin vel placerat vel, mattis sed nunc. Nulla ut metus vitae odio semper vulputate. Curabitur lacinia ut neque quis feugiat. Quisque dapibus purus placerat tellus vulputate elementum.</p>
            <p>Pellentesque eu velit lobortis, interdum velit in, ultricies mi. Aliquam ante massa, mollis et purus ac, luctus hendrerit est. Pellentesque aliquet tincidunt dui eu placerat. Suspendisse et adipiscing sapien. Praesent metus libero, vehicula vel iaculis vel, rhoncus in lacus. Fusce dui mi, eleifend et pellentesque quis, fringilla vitae orci. Nulla sit amet interdum nibh. Sed at rutrum eros. Nunc feugiat egestas orci egestas volutpat. Quisque dapibus sapien urna, ac dapibus nibh egestas ut. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean at imperdiet sapien. Sed nec mattis orci.</p>
            <p>Proin egestas nibh vel enim varius, sed bibendum arcu vestibulum. Nullam condimentum turpis et arcu molestie fringilla. Curabitur porttitor ligula a tellus sollicitudin tincidunt. Pellentesque semper tempus dolor, nec rhoncus mauris euismod eget. Nullam eget blandit odio. Sed eu condimentum erat. Maecenas at tempor arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris iaculis congue suscipit. Sed mollis enim mi, ultricies tincidunt ante fringilla vitae. Phasellus dictum venenatis elit ut blandit. Nunc tortor sem, posuere et sapien id, tristique pulvinar nulla. Mauris egestas gravida nisi. In quis consequat purus, et tincidunt nisi. Suspendisse potenti. Phasellus blandit libero id nisi elementum vehicula.</p>
        </div>
    </div>

    <div class="row">
        <div class="Testdiv">
            1 <br>
            2 <br>
            1 <br>
            2 <br>
            1 <br>
            2 <br>
            1 <br>
            2 <br>
            1 <br>
            2 <br>
            1 <br>
            2 <br>
            1 <br>
            2 <br>
            1 <br>
            2 <br>
            1 <br>
            2 <br>
            1 <br>
            2 <br>
            1 <br>
            2 <br>
            1 <br>
            2 <br>
            1 <br>
            2 <br>
            1 <br>
            2 <br>
            1 <br>
            2 <br>
            1 <br>
            2 <br>
            1 <br>
            2 <br>
            1 <br>
            2 <br>
            1 <br>
            2 <br>
            1 <br>
            2 <br>
            1 <br>
            2 <br>
        </div>
    </div>

    <div class="row">
        <footer class="footer">
            <div class="container">
                <audio id="music3" preload="metadata">
                    <source src="/downloads/mediaplayer/pretty-simple-html5-audio-video-player-jquery-mkh-player/media/interlude.mp3">
                </audio>
            </div>
        </footer>
    </div>



</div>

<!--<div class="PlayerBottomContainer">-->
<!--    <div class="row">-->
<!--        player-->
<!--    </div>-->
<!--</div>-->

</body>
</html>

