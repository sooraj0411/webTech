<link rel="stylesheet" type="text/css" href="head.css">
    <p style="color:skyblue;font-size:2rem;margin-left:47%;margin-top:1%;">Paragraph</p>
    <form class="text-center p-5" action="workspace.php" method="post">
        <label for="id">Id:</label>
        <input type="text" class="form-control" id="id" name="id">
        <label for="txt">Text:</label>
        <input type="text" class="form-control" id="txt" name="txt">
   
        <div class="form-row mb-4">
            <div class="col">
                <label for="color">Color:</label>
                <input type="color" class="form-control" id="color" name="color">
            </div>
            <div class="col">
                <label for="size">Size:</label>
                <input type="text" class="form-control" id="size" name="size">
            </div>
        </div>
        <div class="form-row mb-4">
            <div class="col">
                <label for="top">Top:</label>
                <input type="text" class="form-control" id="top" name="top">
                <label for="btm">Bottom:</label>
                <input type="text" class="form-control" id="btm" name="btm">   
            </div>
            <div class="col">
                <label for="lft">Left:</label>
                <input type="text" class="form-control" id="lft" name="lft">
                <label for="rgt">Right:</label>
                <input type="text" class="form-control" id="rgt" name="rgt">   
            </div>
        </div>
        
        <div class="form-row mb-4">
            <div class="col">
                <label for="bcolor">Border Color:</label>
                <input type="color" class="form-control" id="bcolor" name="bcolor">
            </div>
            <div class="col">
                <label for="width">Border Width:</label>
                <input type="text" class="form-control" id="width" name="bwidth">
            </div>
        </div> 
    <button type="submit" class="btn btn-primary" style="bottom:20%;right:33%" name="add_p">Add</button>
    <button type="submit" class="btn btn-primary" style="bottom:20%;right:37%" name="del_h">Delete</button>
</form>