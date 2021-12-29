function myFunction(e) {
  window.open(
    "https://www.google.com/maps/dir/Sidon/Beirut/@33.7277697,35.2984342,11z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x151ef03ff51e8597:0x181e41e3b9ff1086!2m2!1d35.372948!2d33.5570691!1m5!1m1!1s0x151f17215880a78f:0x729182bae99836b4!2m2!1d35.5017767!2d33.8937913"
  );
}



fetch("../back-end/showoption.php")
  .then((data) => data.json())
  .then((response1) => {
    console.log(response1);
    let output1 = "";
    let output2 = "";
    for (r in response1) {
      output1 += `   
     
        <option  > <td>${response1[r].starting_point}</td></option> ;
        
        `;
        output2 = ` <option selected disabled>Destination</option> `;

      console.log(response1[r].starting_point);
    }
{document.querySelector("#search1").innerHTML += output1;
document.querySelector("#search2").innerHTML += output2;
}
  })



fetch("../back-end/showlist.php")
  .then((data) => data.json())
  .then((response) => {
    console.log(response);
    let output = "";
    
    for (r in response) {
     
     
              if (response[r].status==0){
                output +="";
              }
              if(response[r].status>=10){
                output +=   `  
     
                <tr id="tr" data-toggle="collapse" data-target="#collapseOne"  aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                <th scope="row">${response[r].schedule_id}</th>
                <td>${response[r].starting_point}</td>
                <td>${response[r].destination}</td>
                <td>${response[r].schedule_date}</td>
                <td>${response[r].departure_time}</td>
                <td>${response[r].fare_amount}$</td>
        
                <td ><span id="stts" style="background-color:rgb(133, 255, 117); color:#3f3f3f;font-weight: bold; border-radius: 5px; width:5rem; padding: 1rem;">${response[r].status} seats available </span> </td>
                
                
                
               
                <td> <a href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal" onclick="book(this)"  id="book"  >Book Now</a></td> </tr>
                <div class="modal" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-centered "  role="document">
                  <div class="modal-content ">
                    <div class="modal-header border-bottom-0">
                      <h4 class="modal-title" id="myModalLabel">Confirmation Check</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div id="demo"></div>
                  </div>
                </div>
              </div>
    
              <tr>
                <td colspan="8" id="collapseOne" class="collapse acc" data-parent="#accordion" >
                  <div class="listInfo" >											
                    <div class="Timeline" >
                      
                      <svg height="5" width="50">
                        <line x1="0" y1="0" x2="200" y2="0" style="stroke:#3f3f3f ;stroke-width:4" />
                        Sorry, your browser does not support inline SVG.
                      </svg>
                    
                      <div class="event1">
                        
                        <div class="event1Bubble">
                          <div class="eventTime">
                            <div class="DayDigit">${response[r].departure_time}</div>													  
                          </div>													
                        </div>
                        <svg height="20" width="20">
                          <circle cx="10" cy="11" r="4" fill="#528cf7 " />
                        </svg>
                        <div class="time1">${response[r].starting_point}</div>
                        
                      </div>
                      
                      <svg height="5" width="300">
                        <line x1="0" y1="0" x2="300" y2="0" style="stroke:#3f3f3f ;stroke-width:4" />
                        Sorry, your browser does not support inline SVG.
                      </svg>
                      
                      <div class="event2">
                        
                        <div class="event2Bubble">
                          <div class="eventTime">
                            <div class="DayDigit">${response[r].estimated_arrival_time}</div>													  
                          </div>													
                        </div>
                        <svg height="20" width="20">
                          <circle cx="10" cy="11" r="4" fill="#528cf7" />
                        </svg>
                        <div class="time2">${response[r].destination}</div>
                      </div>
                      
                      <svg height="5" width="50">
                        <line x1="0" y1="0" x2="50" y2="0" style="stroke:#3f3f3f ;stroke-width:4" />
                        Sorry, your browser does not support inline SVG.
                      </svg>
                    </div>
                    
                    <div class="iconClass"> 
                      <div class="iconFlex"><span class="iconify" data-icon="mdi:air-conditioner"  data-width="25" data-height="25" style="color:#3f3f3f"></span></div>
                      <div class="iconFlex"><span class="iconify" data-icon="akar-icons:wifi" data-width="25" data-height="25" style="color:#3f3f3f"></span></div>
                      <div class="iconFlex"><span class="iconify" data-icon="dashicons:food" data-width="25" data-height="25" style="color:#3f3f3f""></span></div>
                      <div class="iconFlex"><span class="iconify" data-icon="ic:baseline-airline-seat-recline-normal" data-width="25" data-height="25" style="color:#3f3f3f"></span></div>
                      <div><span class="iconify" id='locationPath' onclick="myFunction()" data-icon="logos:google-maps" data-width="25" data-height="25" style="margin-top: 1em;"></span><br><span style='color:rgb(63, 63, 63)  ; position: relative;top: 5px;'>Click To Show Path</span></div>	
                    </div>	
                    <div class='driverProfile'>
                      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
                      <div class="container">
                        <div class="row">   
                          <div class="col-md-4 driver">
                            <div class="card user-card">
                              <div class="card-header">
                                <h5>Driver's Profile</h5>
                              </div>
                              <div class="card-block">
                                <div class="user-image">
                                  <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-radius" alt="User-Profile-Image">
                                </div>
                                <h6 class="f-w-600 m-t-25 m-b-10">${response[r].driver_name}</h6>
                                <p class="text-muted">Active | Male | Born 23.05.1992</p>
                                <p class="text-muted m-t-15">Activity Level: 87%</p>
                                <ul class="list-unstyled activity-leval">
                                  <li class="active"></li>
                                  <li class="active"></li>
                                  <li class="active"></li>
                                  <li></li>
                                  <li></li>
                                </ul>
                                <div class="row justify-content-center user-social-link">
                                  <div class="col-auto"><a href="#!"><i class="fa fa-facebook text-facebook"></i></a></div>
                                  <div class="col-auto"><a href="#!"><i class="fa fa-twitter text-twitter"></i></a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>									
                  </div>
                </td>
              </td>
              </tr>
    
          
                  `;}
                      if (response[r].status>=5 && response[r].status<10){
                         output +=   `  
     
                <tr id="tr" data-toggle="collapse" data-target="#collapseOne"  aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                <th scope="row">${response[r].schedule_id}</th>
                <td>${response[r].starting_point}</td>
                <td>${response[r].destination}</td>
                <td>${response[r].schedule_date}</td>
                <td>${response[r].departure_time}</td>
                <td>${response[r].fare_amount}$</td>
        
                <td ><span id="stts" style="background-color:rgb(255, 255, 117); color:#3f3f3f;font-weight: bold; border-radius: 5px; width:5rem; padding: 1rem;">${response[r].status} seats available </span> </td>
                
                
                
               
                <td> <a href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal" onclick="book(this)"  id="book"  >Book Now</a></td> </tr>
                <div class="modal" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-centered "  role="document">
                  <div class="modal-content ">
                    <div class="modal-header border-bottom-0">
                      <h4 class="modal-title" id="myModalLabel style="color:#3f3f3f">Confirmation Check</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div id="demo"></div>
                  </div>
                </div>
              </div>
    
              <tr>
                <td colspan="8" id="collapseOne" class="collapse acc" data-parent="#accordion" >
                  <div class="listInfo" >											
                    <div class="Timeline" >
                      
                      <svg height="5" width="50">
                        <line x1="0" y1="0" x2="200" y2="0" style="stroke:#3f3f3f ;stroke-width:4" />
                        Sorry, your browser does not support inline SVG.
                      </svg>
                    
                      <div class="event1">
                        
                        <div class="event1Bubble">
                          <div class="eventTime">
                            <div class="DayDigit">${response[r].departure_time}</div>													  
                          </div>													
                        </div>
                        <svg height="20" width="20">
                          <circle cx="10" cy="11" r="4" fill="#528cf7 " />
                        </svg>
                        <div class="time1">${response[r].starting_point}</div>
                        
                      </div>
                      
                      <svg height="5" width="300">
                        <line x1="0" y1="0" x2="300" y2="0" style="stroke:#3f3f3f ;stroke-width:4" />
                        Sorry, your browser does not support inline SVG.
                      </svg>
                      
                      <div class="event2">
                        
                        <div class="event2Bubble">
                          <div class="eventTime">
                            <div class="DayDigit">${response[r].estimated_arrival_time}</div>													  
                          </div>													
                        </div>
                        <svg height="20" width="20">
                          <circle cx="10" cy="11" r="4" fill="#528cf7" />
                        </svg>
                        <div class="time2">${response[r].destination}</div>
                      </div>
                      
                      <svg height="5" width="50">
                        <line x1="0" y1="0" x2="50" y2="0" style="stroke:#3f3f3f ;stroke-width:4" />
                        Sorry, your browser does not support inline SVG.
                      </svg>
                    </div>
                    
                    <div class="iconClass"> 
                      <div class="iconFlex"><span class="iconify" data-icon="mdi:air-conditioner"  data-width="25" data-height="25" style="color:#3f3f3f"></span></div>
                      <div class="iconFlex"><span class="iconify" data-icon="akar-icons:wifi" data-width="25" data-height="25" style="color:#3f3f3f"></span></div>
                      <div class="iconFlex"><span class="iconify" data-icon="dashicons:food" data-width="25" data-height="25" style="color:#3f3f3f""></span></div>
                      <div class="iconFlex"><span class="iconify" data-icon="ic:baseline-airline-seat-recline-normal" data-width="25" data-height="25" style="color:#3f3f3f"></span></div>
                      <div><span class="iconify" id='locationPath' onclick="myFunction()" data-icon="logos:google-maps" data-width="25" data-height="25" style="margin-top: 1em;"></span><br><span style='color:rgb(63, 63, 63)  ; position: relative;top: 5px;'>Click To Show Path</span></div>	
                    </div>	
                    <div class='driverProfile'>
                      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
                      <div class="container">
                        <div class="row">   
                          <div class="col-md-4 driver">
                            <div class="card user-card">
                              <div class="card-header">
                                <h5>Driver's Profile</h5>
                              </div>
                              <div class="card-block">
                                <div class="user-image">
                                  <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-radius" alt="User-Profile-Image">
                                </div>
                                <h6 class="f-w-600 m-t-25 m-b-10">${response[r].driver_name}</h6>
                                <p class="text-muted">Active | Male | Born 23.05.1992</p>
                                <p class="text-muted m-t-15">Activity Level: 87%</p>
                                <ul class="list-unstyled activity-leval">
                                  <li class="active"></li>
                                  <li class="active"></li>
                                  <li class="active"></li>
                                  <li></li>
                                  <li></li>
                                </ul>
                                <div class="row justify-content-center user-social-link">
                                  <div class="col-auto"><a href="#!"><i class="fa fa-facebook text-facebook"></i></a></div>
                                  <div class="col-auto"><a href="#!"><i class="fa fa-twitter text-twitter"></i></a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>									
                  </div>
                </td>
              </td>
              </tr>
    
          
                  `;}
                              if (response[r].status<5 && response[r].status>=1){
                                output +=   `  
     
                                <tr id="tr" data-toggle="collapse" data-target="#collapseOne"  aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                <th scope="row">${response[r].schedule_id}</th>
                                <td>${response[r].starting_point}</td>
                                <td>${response[r].destination}</td>
                                <td>${response[r].schedule_date}</td>
                                <td>${response[r].departure_time}</td>
                                <td>${response[r].fare_amount}$</td>
                        
                                <td ><span id="stts" style="background-color:rgb(255, 50, 94); color:#3f3f3f;font-weight: bold; border-radius: 5px; width:5rem; padding: 1rem;">${response[r].status} seats available </span> </td>
                                
                                
                                
                               
                                <td> <a href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal" onclick="book(this)"  id="book"  >Book Now</a></td> </tr>
                                <div class="modal" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-centered "  role="document">
                                  <div class="modal-content ">
                                    <div class="modal-header border-bottom-0">
                                      <h4 class="modal-title" id="myModalLabel">Confirmation Check</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div id="demo"></div>
                                  </div>
                                </div>
                              </div>
                    
                              <tr>
                                <td colspan="8" id="collapseOne" class="collapse acc" data-parent="#accordion" >
                                  <div class="listInfo" >											
                                    <div class="Timeline" >
                                      
                                      <svg height="5" width="50">
                                        <line x1="0" y1="0" x2="200" y2="0" style="stroke:#3f3f3f ;stroke-width:4" />
                                        Sorry, your browser does not support inline SVG.
                                      </svg>
                                    
                                      <div class="event1">
                                        
                                        <div class="event1Bubble">
                                          <div class="eventTime">
                                            <div class="DayDigit">${response[r].departure_time}</div>													  
                                          </div>													
                                        </div>
                                        <svg height="20" width="20">
                                          <circle cx="10" cy="11" r="4" fill="#528cf7 " />
                                        </svg>
                                        <div class="time1">${response[r].starting_point}</div>
                                        
                                      </div>
                                      
                                      <svg height="5" width="300">
                                        <line x1="0" y1="0" x2="300" y2="0" style="stroke:#3f3f3f ;stroke-width:4" />
                                        Sorry, your browser does not support inline SVG.
                                      </svg>
                                      
                                      <div class="event2">
                                        
                                        <div class="event2Bubble">
                                          <div class="eventTime">
                                            <div class="DayDigit">${response[r].estimated_arrival_time}</div>													  
                                          </div>													
                                        </div>
                                        <svg height="20" width="20">
                                          <circle cx="10" cy="11" r="4" fill="#528cf7" />
                                        </svg>
                                        <div class="time2">${response[r].destination}</div>
                                      </div>
                                      
                                      <svg height="5" width="50">
                                        <line x1="0" y1="0" x2="50" y2="0" style="stroke:#3f3f3f ;stroke-width:4" />
                                        Sorry, your browser does not support inline SVG.
                                      </svg>
                                    </div>
                                    
                                    <div class="iconClass"> 
                                      <div class="iconFlex"><span class="iconify" data-icon="mdi:air-conditioner"  data-width="25" data-height="25" style="color:#3f3f3f"></span></div>
                                      <div class="iconFlex"><span class="iconify" data-icon="akar-icons:wifi" data-width="25" data-height="25" style="color:#3f3f3f"></span></div>
                                      <div class="iconFlex"><span class="iconify" data-icon="dashicons:food" data-width="25" data-height="25" style="color:#3f3f3f""></span></div>
                                      <div class="iconFlex"><span class="iconify" data-icon="ic:baseline-airline-seat-recline-normal" data-width="25" data-height="25" style="color:#3f3f3f"></span></div>
                                      <div><span class="iconify" id='locationPath' onclick="myFunction()" data-icon="logos:google-maps" data-width="25" data-height="25" style="margin-top: 1em;"></span><br><span style='color:rgb(63, 63, 63)  ; position: relative;top: 5px;'>Click To Show Path</span></div>	
                                    </div>	
                                    <div class='driverProfile'>
                                      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
                                      <div class="container">
                                        <div class="row">   
                                          <div class="col-md-4 driver">
                                            <div class="card user-card">
                                              <div class="card-header">
                                                <h5>Driver's Profile</h5>
                                              </div>
                                              <div class="card-block">
                                                <div class="user-image">
                                                  <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-radius" alt="User-Profile-Image">
                                                </div>
                                                <h6 class="f-w-600 m-t-25 m-b-10">${response[r].driver_name}</h6>
                                                <p class="text-muted">Active | Male | Born 23.05.1992</p>
                                                <p class="text-muted m-t-15">Activity Level: 87%</p>
                                                <ul class="list-unstyled activity-leval">
                                                  <li class="active"></li>
                                                  <li class="active"></li>
                                                  <li class="active"></li>
                                                  <li></li>
                                                  <li></li>
                                                </ul>
                                                <div class="row justify-content-center user-social-link">
                                                  <div class="col-auto"><a href="#!"><i class="fa fa-facebook text-facebook"></i></a></div>
                                                  <div class="col-auto"><a href="#!"><i class="fa fa-twitter text-twitter"></i></a></div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          
                                        </div>
                                      </div>
                                    </div>									
                                  </div>
                                </td>
                              </td>
                              </tr>
                    
                          
                                  `;}
      
            
    }
   
   
    document.querySelector("#showtrips").innerHTML = output;
   

   
  })



$(document).ready(function(){

  $("#search1" ).change(function (e) {
    e.preventDefault();
    var selectedcity1 = $(".search1 option:selected").val();

    $.ajax({
      type: "POST",
      url: "../back-end/searchtrips.php",
      data: { selectedcity1: selectedcity1},
    }).done(function (data) {
      $("#showtrips").html(data); //echo
      console.log(data);
    });
  });


    $("#search1" ).change(function (e) {
      e.preventDefault();
      var selectedcity1 = $(".search1 option:selected").val();
    console.log(selectedcity1);
      $.ajax({
        type: "POST",
        url: "../back-end/showoption2.php",
        data: {selectedcity1: selectedcity1},
      }).done(function (data) {
        document.querySelector("#search2").innerHTML = data; //echo
        console.log(data);
      });
    });
    $("#search2" ).change(function (e) {
      e.preventDefault();
      var selectedcity2 = $(".search2 option:selected").val();
    console.log(selectedcity2);
      $.ajax({
        type: "POST",
        url: "../back-end/searchtrips2.php",
        data: {selectedcity2: selectedcity2},
      }).done(function (data) {
        document.querySelector("#showtrips").innerHTML = data; //echo
        console.log(data);
      });
    });
});

    function book(e){
        var td = e.closest('td').parentNode.children[0].innerHTML; 
        console.log(td); 
        $.ajax({
         
          type: "POST",
          url: "../back-end/confirmation.php",
          data: {td:td},
        }).done(function (data) {
     
        console.log(data);
          $("#demo").html(data);   
        });
      };

    

 
  
     



