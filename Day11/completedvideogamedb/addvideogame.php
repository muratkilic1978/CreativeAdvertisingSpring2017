<?php
$siteTitle = "Add videogame";
$siteName = "Add Videogame to collection";
$siteDescription = "Please fill out the form below";

include('includes/header.php');

?>

    <i class="fa fa-plus fa-3x" aria-hidden="true"></i><i class="fa fa-archive fa-3x"></i>
    <form action="addingvideogame.php" method="post">
        
        <div class="form-group">
            <label for="titlename">Title</label>
            <input type="text" name="titlename" id="titlename" class="form-control" placeholder="Fifa 2017">
        </div><!--End titlename -->
        
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5" class="form-control"></textarea>
        </div><!--End description-->
        
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" class="form-control" min="0" max="9999" step="0.5" value="99">
        </div><!--End price-->
        
        <?php 
        # include database connection-file
        include('includes/connectdb.php');
        
        # making a SQL-query to the database
        $platformQuery = "SELECT id, platformname FROM platforms";
        
        #Executing the SQL-query "$platformQuery"
        $resultPlatformQuery = mysqli_query($dbc, $platformQuery);
        
        # making a SQL-query to the database
        $publisherQuery = "SELECT id, publishername FROM publishers";
        
        #Executing the SQL-query "$publisherQuery"
        $resultPublisherQuery = mysqli_query($dbc, $publisherQuery);
        ?>
        
        <div class="form-group">
            <label for="publishers">Publisher</label>
            <select name="publisherid" class="form-control" id="publisherid">
            <!--Looping through array with publishers -->
            <?php while($row = mysqli_fetch_array($resultPublisherQuery)):  ?>
                <option value="<?php echo $row['id']; ?> "><?php echo $row['publishername']; ?> </option>
            <!--Ending loop-->
            <?php endwhile; ?>
            </select>
        </div><!--End publisher-->
        
        <div class="form-group">
            <label for="platforms">Platform</label>
            <select name="platformid" class="form-control" id="platformid">
            <!--Looping through array with platforms -->
            <?php while($row = mysqli_fetch_array($resultPlatformQuery)):  ?>
                <option value="<?php echo $row['id']; ?> "><?php echo $row['platformname']; ?> </option>
            <!--Ending loop-->
            <?php endwhile; ?>
            </select>
        </div><!--End platform-->
        
        <input type="submit" value="Submit" name="Submit" class="btn btn-primary btn-block btn-success">
    </form>
    <aside id="asidevideogame">
        
    </aside>
    <?php include('includes/footer.php'); ?>
    
    
    
    
    
    
    
    
    
    
