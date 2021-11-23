<?php 
    include('includes/header.php'); 
    $companies['Sony_Electronics'] = 'sonye_make.believe';
    $companies['CVS_Health'] = 'cvshe_Health Is Everything';
    $companies['LG_Electronics'] = 'lgele_Life\'s Good';
    $companies['Exxon_Mobile'] = 'exxon_Put a tiger in your tank.';
    $companies['Costco_Wholesale'] = 'costc_do the right thing';

?>
<div id="wrapper">
    <div id="hero">

    </div>
    <main>
    <h1><?php echo $headline;?></h1>
    <table>
        <?php foreach($companies as $name => $image) :?>
            <tr>
                <td><img src="images/<?php echo ''.substr($image,0, 5).'.jpg'; ?>" alt="<?php echo str_replace('_', ' ', $name); ?>"></td>
                <td><?php echo str_replace('_', ' ', $name); ?></td>
                <td><?php echo substr($image, 6); ?></td>
                <td><img src="images/<?php echo ''.substr($image,0, 6).'.jpg'; ?>" alt="<?php echo str_replace('_', ' ', $name); ?>"></td>
            </tr>
        <?php endforeach; ?>
    </table>
    </main>

    <aside>


    </aside>
<?php 
include('includes/footer.php');
?>
            