<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!--bootsrap-5 css-->
  <link rel="stylesheet" href="#">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
</head>
<body>


<!--image ko lagi-->
    <div class="image">
      
        <div class="blackLayer">
          
      </div>
      <div class="write"> 
        <b> Air conditioning services</b>
    </div>
    <div class="writetwo"> 
        <b> Car Air conditioning Repairs</b>
        
    </div>
    </div>
    <div class="ser">
    <div class="servicetext">
      <div class="servicebox">
          <h3><b>Car Air conditioning Repairs</b></h3>
          <p>Air Conditioning systems require maintenance to continue functioning well. At Good Automobile we offer the best car AC repair services at affordable prices which include compressor check, fixing refrigerant leaks and more.
            <br><br>
            When you visit our workshop, our trained and experienced technicians check for all potential faults associated with the car AC system like leaks and faulty compressors. We then repair or replace the damaged parts to ensure that your car AC is working in tip-top condition so you can enjoy your driving experience in any kind of weather.
            
          </p>
          
      </div>
    </div>
  </div>
  


  <div class="ser">
    
    <div class="serviceimage">
        <div class="service">
        </div>
        </div>
        </div>
  
        <div class="sertwo">
          <div class="serviceimagetwo">
              <div class="servicetwo">
              </div>
              </div>
              </div>
        
              <div class="serthree">
               
                <div class="serviceimagethree">
                  <a href="service1.html" class="button">Book Now</a>
                    <div class="servicethree">
                     
                    </div>
                    </div>
                    </div>
                   

    <style>
      *
  {
    
    margin: 0%;
    overflow-x: hidden;
    overflow-y: auto;
    
  }

      .image{
    
    background-image:url(Images/carairconditioningcovertry.jpg);
    background-size:cover;
    width:2000px;
    height:450px;
    object-fit:cover; 
  
  }
  
  .blackLayer{
  
    width:100%;
    height:100%;
    background-color:#000;
    opacity:0.5;
  
  }
  
  .write{
   
    color:white;
    position: absolute;
      top: 30%;
      left: 25%;
      font-size: 20px;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      text-shadow: rgb(255, 0, 0) 3px 0 10px;
  }

  .writetwo
  {
    color:white;
    position: absolute;
      top: 35%;
      left: 15%;
      font-size: 40px;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      text-shadow: rgb(255, 0, 0) 3px 0 10px;

  }
  .ser{
    background-image:url(Images/black.jpg);
    background-size:cover;
    width:2000px;
    height:310px;
    object-fit:cover; 
    background-color: #000;
   
  }

  .servicetext{
    color:black;
    position: absolute;
      top: 55%;
      left: 8%;
      font-size: 15px;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      box-sizing: content-box;
      box-shadow: 0 0 5px 5px rgb(109, 109, 109);
      background: rgb(245, 243, 243);
      width: 700px;
    height: 450px;
    padding: 20px;
   border-radius: 2%;
   
  }
  h3{
    font-family: 'Times New Roman', Times, serif;
    text-align: center;
    text-shadow: rgb(252, 170, 170) 3px 0 10px;
   
  }
  p{
    font-family: 'Times New Roman', Times, serif;
    text-align: left;
    
    font-size: 18px;
    padding: 20px;
  }

  

  

  .serviceimage
  {
    background-image:url(Images/carairconditioning1vin.jpg);
    background-size:cover;
    width:400px;
    height:300px;
    object-fit:contain; 
    position: absolute;
    top: 105%;
    left: 4%;
    transition: transform 0.3s ease-in-out, background-color 0.3s ease-in-out;
    cursor: pointer;
    
  }
  .serviceimage:hover {
   
    transform: translateY(-10px); 
    background-image:url(Images/carairconditioning1.jpg);
  }


  

  .serviceimagetwo
  {
    background-image:url(Images/carairconditioning2vin.jpg);
    background-size:cover;
    width:400px;
    height:300px;
    object-fit:contain; 
    position: absolute;
    top: 105%;
    left: 35%;
    transition: transform 0.3s ease-in-out, background-color 0.3s ease-in-out;
    cursor: pointer;
    
  }
  .serviceimagetwo:hover {
   
    transform: translateY(-10px); 
    background-image:url(Images/carairconditioning2.jpg);
  }

  .serviceimagethree
  {
    background-image:url(Images/carairconditioning3.jpeg);
    background-size:cover;
    width:300px;
    height:450px;
    object-fit:contain; 
    position: absolute;
    top: 25%;
    left: 70%;
    
    cursor: pointer;
    
  }
  
  
  .button {
    left: 30%;
  top: 45%;
	display: inline-block;
	padding: .75rem 1.25rem;
	border-radius: 10rem;
	color: #fefdfd;
	text-transform: uppercase;
	font-size: 1rem;
	text-decoration: none;
	transition: all .3s;
	position: relative;
	overflow: hidden;
	z-index: 1;
	&:after {
		content: '';
		position: absolute;
		bottom: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: crimson;
		border-radius: 10rem;
		z-index: -2;
	}
	
	&:hover {
		color: #170101;
		&:before {
			width: 100%;
		}
	}
}

    </style>

   </body>
</html>