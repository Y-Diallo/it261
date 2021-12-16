<?php 
    include('config.php');
    include('includes/header.php');

    switch($today) {
        case 'Sunday' :
            $nestleWater = '<h2>Build quality!</h2>';
            $pic = 'build_quality.jpg';
            $alt = 'Build quality';
            $color ='#d88';
            $content = 'Cheap keyboards with plastic cases and backplates feel and sound hollow when you type and can flex when you press too hard on them. A sturdier keyboard made of metal or other higher-quality materials won\'t do that.';
            break;
    
        case 'Monday' :
            $nestleWater = '<h2>Keycaps!</h2>';
            $pic = 'keycaps.png';
            $alt = 'Keycaps';
            $color ='#88d';
            $content = 'Many keyboards come with ABS keycaps, a lightweight type of plastic that\'s more prone to wear and can become smooth and shiny with heavy use. Keycaps made of PBT tend to be more durable and have a grittier texture.';
            break;
    
        case 'Tuesday' :
            $nestleWater = '<h2>Programmability!</h2>';
            $pic = 'programmability.jpg';
            $alt = 'Programmability';
            $color ='#8d8';
            $content = 'Many nonmechanical keyboards can\'t be programmed—that is, you can\'t change the default behavior of certain keys to perform other actions—at all. You simply connect them to your computer and they do the normal keyboard stuff. But a good chunk of mechanical keyboards can be customized.';
            break;
    
        case 'Wednesday' :
            $nestleWater = '<h2>Removable cable!</h2>';
            $pic = 'removable_cable.jpg';
            $alt = 'Removable cable';
            $color ='#dd8';
            $content = 'A removable USB cable is preferable to a built-in one, because if the cable breaks it\'s easier to replace just the cable rather than the whole keyboard.';
            break;
    
        case 'Thursday' :
            $nestleWater = '<h2>Backlight!</h2>';
            $pic = 'backlight.jpg';
            $alt = 'Backlight';
            $color ='#8dd';
            $content = 'Backlighting can be a nice addition but it isn\'t a requirement for typing or coding. ';
            break;
    
        case 'Friday' :
            $nestleWater = '<h2>Hot-swap switches!</h2>';
            $pic = 'hotswap_switches.webp';
            $alt = 'Hot-swap switches';
            $color ='#d8d';
            $content = 'Swapping out switches on most mechanical keyboards requires the equipment, expertise, and time to desolder the existing switches and solder in new ones. On a hot-swappable board, you can simply pull the switches out and snap new ones into place.';
            break;
    
        case 'Saturday' :
            $nestleWater = '<h2>Customizable!</h2>';
            $pic = 'customizable.jpeg';
            $alt = 'Customizable';
            $color ='#ddd';
            $content = 'Mechanical keyboards have individual switches beneath each key, which makes this style of keyboard more durable, easier to repair, and more customizable than membrane, scissor, or butterfly keyboards—as well as more comfortable in many cases. Mechanical switches come in three main varieties: linear, tactile, and clicky.';
            break;
    
        case '':
            break;
    }
?>
<div id="wrapper">
    
        <main>
        <div class="inset" style="background:<?php echo ''.$color.'';?>;">
        <h1><?php echo $headline;?></h1>
        <?php echo $nestleWater;?>
        <p><?php echo $content;?></p>
        
        
    </div>
    </main>

    <aside>
    <img id="image" src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
    <h2>Explore Why Mechanical Keyboards are better!</h2>

        <ul>
        <li><a href="daily.php?today=Sunday">Build quality</a></li>
        <li><a href="daily.php?today=Monday">Keycaps</a></li>
        <li><a href="daily.php?today=Tuesday">Programmability</a></li>
        <li><a href="daily.php?today=Wednesday">Removable cable</a></li>
        <li><a href="daily.php?today=Thursday">Backlight</a></li>
        <li><a href="daily.php?today=Friday">Hot-swap switches</a></li>
        <li><a href="daily.php?today=Saturday">Customizable</a></li>
        </ul>
    </aside>
<?php 
include('includes/footer.php');
?>
            