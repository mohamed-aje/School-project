<?php
include 'header.php'?>
<form action="create1.php" method="post">
        <div class="container" style=background-color:grey>
        <div class="form-row">
        <div class="form-group">
        <label for="inputName">Name</label>
        <input type="text" class="form-control" id="inputName" placeholder="Name" name="name">
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPhone">Phone</label>
            <input type="tel" class="form-control" id="inputPhone" placeholder="Phone" name="phone">
        </div>
        </div>
        
       
        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="date">Arrive</label>
            <input class="form-control" type="date" id="date"  placeholder="MM/DD/YYYY"  name="arrive" />
        </div>
        <div class="form-group col-md-4">
            <label for="date">Depart</label>
            <input type="date" class="form-control" id="inputdepart" name="depart">
        </div>
        <div class="form-group col-md-4">
            <label for="inputpeople">People</label name="people">
            <select class="form-control">
          <option value="blank"></option>
          <option value="1">1</option>
          <option value="2" selected>2</option>
          <option value="3">3</option>
            <option value="4">4</option>567w3e 
        </select>
        </div>
        </div>
        <div class="form-row">
        <div class="form-check">
        <p class="info-text">Please describe your needs e.g. Extra beds, children's cots</p>
        <br>
        <div class="controls">
          <textarea name="comments" class="form-control" id="comments" ></textarea>
          <label for="comments" name="comment">Comments</label>
          </div>
            
      </div>  
        </div>
        </div>
        <button type="submit" class="btn ">Book Now</button>
    </div>

</form>

    <?php include 'footer.php'?>