<link rel="stylesheet" type="text/css" href="head.css">
<p style="color:skyblue;font-size:2rem;margin-left:47%;margin-top:1%;">Heading</p>
<form class="text-center p-5" action="" method="post">
        <label for="heading">Heading:</label>
        <input type="text" class="form-control" id="heading" name="heading">
        <div class="form-row mb-4">
        <div class="col">
            <label for="id" >Id:</label>
            <input type="text" class="form-control" id="id" name="id">
        </div>
        </div>
        <div class="form-row mb-4">
            <div class="col">
                <label for="color">Color:</label>
                <input type="color" class="form-control" name="color">
            </div>
            <div class="col">
                <label for="size">Size:</label>
                <select class="form-control" id="size" name="size">
                    <option value="h1"><h1>h1</h1></option>
                    <option value="h2"><h2>h2</h2></option>
                    <option value="h3"><h3>h3</h3></option>
                    <option value="h4"><h4>h4</h4></option>
                    <option value="h5"><h5>h5</h5></option>
                    <option value="h6"><h6>h6</h6></option>
                </select>
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
        <button type="submit" class="btn btn-primary" name="add_h" style="bottom:30%;left:60%">Add</button> 
        <button type="submit" class="btn btn-primary" name="del" style="bottom:30%;left:50%">Delete</button>
</form>