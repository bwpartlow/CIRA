<?php
 $conn=mysqli_connect("localhost","dr_cira","hjklPOIU","dr_cira");
 /* check connection */
 if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
 }

/*if ($result = mysqli_query($conn, "SELECT DATABASE()")) {
    $row = mysqli_fetch_row($result);
    printf("Default database is %s.\n", $row[0]);
    mysqli_free_result($result);
}*/

 //CURRENT CIRA MAGAZINE
?>
        <!--<script type="text/javascript" src="embed/jquery_slider/js/jquery-1.8.2.js" ></script>-->
        <script type="text/javascript" src="/embed/jquery-1.7.js" ></script>
        <script type="text/javascript" src="/embed/jquery_slider/js/jquery-ui-1.9.0.custom.min.js" ></script>
        <script type="text/javascript" src="/embed/jquery_slider/js/jquery-ui-tabs-rotate.js" ></script>
        <script type="text/javascript">
         var jQuery_2 = $.noConflict(true);
        </script>
        <script type="text/javascript">
        jQuery_2(document).ready(function(){
                jQuery_2("#featured2").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
        });
        </script>

         <div style="display:table;width:100%;border:0px solid black;border-spacing:0px;">
          <div style="display:table-row;">
           <div style="display:table-cell;border:0px solid black;">
<!--New jQuery Slider Code-->
            <div id="featured2" style="border: 1px solid black !important;">
             <ul class="ui-tabs-nav">
              <li class="ui-tabs-nav-item" id="nav-fragment-1a" style="display:none;margin-top:3px;"><a href="#fragment-1a"><img style="height:50px;" src="/embed/images/16summer.feature_slide.png" alt="" width="80" height="50"/><span>Colorado Climate Center</span></a></li>
              <li class="ui-tabs-nav-item" id="nav-fragment-2a" style="display:none;">
               <a href="#fragment-2a">
                <img style="height:50px;" src="/sites/default/files/cira_magazine_slider/" alt="" width="80" height="50"/><span><?php echo "CIRA Magazine"; ?></span>
               </a>
              </li>
             </ul>
             <!-- First Content -->
             <div id="fragment-1a" class="ui-tabs-panel" style="">
              <h5 style="width:268px;background-color:white;text-align:center;">Current Radar Image</h5>
              <a href="http://weather.cira.colostate.edu/radar/latest.png" target="_blank">
               <img style="float:left;height:203px;width:268px;max-width:600px;" src="http://weather.cira.colostate.edu/radar/latest.png" alt=""/></a>
               <a href="http://weather.cira.colostate.edu/radar/radar_loop.gif" style="color: #1982d1;" target="_blank"><div style="width:268px;height:20px;position: absolute;top: 235px;background: white;opacity: 0.7;text-align:center;">View Current Radar Loop</div></a>
             </div>
             <!-- Second Content -->
             <div id="fragment-2a" class="ui-tabs-panel ui-tabs-hide" style="">
              <h5 style="width:268px;background-color:white;text-align:center;">Current Satellite Image</h5>
              <a href="http://rammb.cira.colostate.edu/ramsdis/online/images/latest/goes-west_goes-east/gwvis01.gif" target="_blank">
               <img style="float:left;height:203px;width:268px;max-width:600px;" src="http://rammb.cira.colostate.edu/ramsdis/online/images/thumb/goes-west_goes-east/gwvis01.gif" alt=""/></a>
               <a href="http://rammb.cira.colostate.edu/ramsdis/online/goes-west_goes-east.asp" target="_blank" style="color: #1982d1;"><div style="width:268px;height:20px;position: absolute;top: 235px;background: white;opacity: 0.7;text-align:center;">View Current Satellite Loops</div></a>
             </div>
             <!-- Third Content -->
            </div>
           </div>
          </div>
         </div>
<?php
 mysqli_close($conn);
?>
