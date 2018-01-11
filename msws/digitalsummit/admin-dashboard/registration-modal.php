<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Registered to</h4> 
      </div>
      <div class="modal-body">
        <p>
       <button type="button" class="btn btn-primary" id="techtalksButton" >Techtalks</button> &nbsp;&nbsp;
          <button type="button" class="btn btn-primary" id="citizenhackButton">Citizen Hack</button>
          <button type="button" class="btn btn-primary" id="hungamaButton">Hungama</button>
      
       <?php 
       //www dir: domain.com/temp/2005/january/t1.php
       
       $currentPage = basename ($_SERVER['PHP_SELF'],".php");// returns: t1
       
       if($currentPage=='admin-techtalks'){
       
       ?>
       <div class="row"  style="margin-top:20px;">
          <form>
              
             <div class="col-sm-4" style="margin-top: -1px;">
                 <h5>Likely to come</h5> &nbsp; &nbsp; </div>
   <div class="col-sm-8" style="margin-top: 5px;margin-left: -84px;">
        <label class="radio-inline">
      <input type="radio" name="optradio" value="1"> Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="0"> No
    </label>
      <label class="radio-inline">
      <input type="radio" name="optradio" value="-1"> Not Reachable
    </label>
   </div>
        
  </form>
  </div>
  <div class="container">
  <div class="row" style="margin-top: -10px;">
       <h5>Add Comments</h5>
      <textarea rows="4" cols="50" id="callComments" name="callComments"></textarea>
  </div>
  <br>
 
 <div class="col-sm-6">
  <div class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
    <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
  </div><br>
  </div>
  
  <div class="row" style="margin-top:10px;margin-left:310px;">
  
  
   <div class="col-sm-6">
  <br>
  <button type="button" class="btn btn-primary" id="btnCallSubmit" onclick="updateCallData();">Submit</button>
  </div>
  </div>
       </div>
       
       </p>
       <?php } ?>
       
       
      </div>
      <div class="modal-footer">
      </div>
    </div>

    </div>
</div>