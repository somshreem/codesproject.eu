

<?php include 'header.php';?>

<style>

.hovereffect {
width: 100%;
height: 100%;
    float: left;
overflow: hidden;
position: relative;
    text-align: center;
cursor: default;
}

.hovereffect .overlay {
width: 100%;
height: 100%;
position: absolute;
overflow: hidden;
left: 0;
    background-color: rgba(255, 255, 255, 1.0);
top: -200px;
opacity: 0;
filter: alpha(opacity=0);
    -webkit-transition: all 0.1s ease-out 0.5s;
transition: all 0.1s ease-out 0.5s;
}

.hovereffect:hover .overlay {
opacity: 1;
filter: alpha(opacity=100);
top: 0px;
    -webkit-transition-delay: 0s;
    transition-delay: 0s;
}

.hovereffect img {
display: block;
position: relative;
}

.hovereffect h2 {
    text-transform: uppercase;
color: #fff;
    text-align: center;
position: relative;
    font-size: 17px;
padding: 10px;
background: rgba(0, 0, 0, 1.0);
    -webkit-transform: translateY(-200px);
    -ms-transform: translateY(-200px);
transform: translateY(-200px);
    -webkit-transition: all ease-in-out 0.1s;
transition: all ease-in-out 0.1s;
    -webkit-transition-delay: 0.3s;
    transition-delay: 0.3s;
}

.hovereffect:hover h2 {
    -webkit-transform: translateY(0px);
    -ms-transform: translateY(0px);
transform: translateY(0px);
    -webkit-transition-delay: 0.3s;
    transition-delay: 0.3s;
}

.hovereffect a.info {
display: inline-block;
    text-decoration: none;
padding: 7px 14px;
    text-transform: uppercase;
margin: 50px 0 0 0;
    background-color: transparent;
    -webkit-transform: translateY(-200px);
    -ms-transform: translateY(-200px);
transform: translateY(-200px);
color: #000;
border: 1px solid #000;
    -webkit-transition: all ease-in-out 0.3s;
transition: all ease-in-out 0.3s;
}

.hovereffect a.info:hover {
    box-shadow: 0 0 5px #fff;
}

.hovereffect:hover a.info {
    -webkit-transform: translateY(0px);
    -ms-transform: translateY(0px);
transform: translateY(0px);
    box-shadow: 0 0 5px #000;
color: #000;
border: 1px solid #000;
    -webkit-transition-delay: 0.3s;
    transition-delay: 0.3s;
}

.bigger { font-size:200%; }

ul {
    list-style-position: inside;
    padding-left:0;
}

</style>


<div class="container">
    <h1 class="title">Contacts</h1>
    <div class="row">
        <div class="wowload fadeInLeft">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="wowload fadeInLeft">

                        <div class = "row">

                            <div class="col-sm-6">
                                <p align="justify"><b>Eric Jensen</b> </br> Project Leader </br> Power2U, Stockholm </br> <a href="mailto:eric.jensen@innoenergy.com">eric.jensen@innoenergy.com</a> </p>
                            </div>

                            <div class="col-sm-6">
                                <p align="justify"><b>Fredrik Billing</b> </br> Head of Management </br> Power2U, Stockholm </br> <a href="mailto:fredrik.billing@innoenergy.com">fredrik.billing@innoenergy.com</a> </p>
                            </div>


                        </div>

                        <hr>

                        <div class = "row">

                            <div class="col-sm-6">
                                <p align="justify"><b>Jonas Tannerstad</b> </br> Head of Technical Installations </br> ÖBO, Örebro </br> <a href="mailto:jonas.tannerstad@obo.se">jonas.tannerstad@obo.se</a> </p>
                            </div>

                            <div class="col-sm-6">
                                <p align="justify"><b>Arshad Saleem</b> </br> Project Management </br> Power2U, Stockholm </br> <a href="mailto:arshad.saleem@innoenergy.com">arshad.saleem@innoenergy.com</a> </p>
                            </div>

                        </div>

                        <hr>

                        <div class = "row">

                            <div class="col-sm-6">
                                <p align="justify"><b>Albin Engholm</b> </br> Project Management </br> Power2U, Stockholm </br> <a href="mailto:albin.engholm@innoenergy.com">albin.engholm@innoenergy.com</a> </p>
                            </div>

                            <div class="col-sm-6">
                                <p align="justify"><b>Dapeng Lan</b> </br> Embedded Systems Expert </br> Power2U, Stockholm </br> <a href="mailto:dapeng.lan@innoenergy.com">dapeng.lan@innoenergy.com</a> </p>
                            </div>

                        </div>

                        <hr>

                        <div class = "row">

                            <div class="col-sm-6">
                                <p align="justify"><b>Vladyslav Milshyn</b> </br> Technical Developer </br> Power2U, Stockholm </br> <a href="mailto:vlad.milshyn@innoenergy.com">vlad.milshyn@innoenergy.com</a> </p>
                            </div>

                            <div class="col-sm-6">
                                <p align="justify"><b>Gustaf Svantesson</b> </br> Technical Developer </br> Power2U, Stockholm </br> <a href="mailto:gustaf.svantesson@innoenergy.com">gustaf.svantesson@innoenergy.com</a> </p>
                            </div>

                        </div>

                        <hr>


                        <div class = "row">

                            <div class="col-sm-6">
                                <p align="justify"><b>Lukas Keller</b> </br> Energy Engineer </br> Power2U, Stockholm </br> <a href="mailto:lukas.keller@innoenergy.com">lukas.keller@innoenergy.com</a> </p>
                            </div>

                            <div class="col-sm-6">
                                <p align="justify"><b>Joel Mars-Bodell</b> </br> Energy Engineer </br> Power2U, Stockholm </br> <a href="mailto:joel.marsbodell@innoenergy.com">joel.marsbodell@innoenergy.com</a> </p>
                            </div>

                        </div>

                    </div>
                </div>


                <div class="col-sm-6 col-md-6">
                    <div class="wowload fadeInRight">
                        <div class="map">

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2034.206066077773!2d18.07027571600997!3d59.34620798166473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465f9d41d1de95bd%3A0xd343e8e787d09a60!2sValhallav%C3%A4gen+79%2C+114+27+Stockholm!5e0!3m2!1sen!2sse!4v1490004973683" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

                        </div>

                        </br></br></br>



                        <div class="col-sm-4">
                        </div>

                        <div class="col-sm-4">
                            <div class="wowload fadeInRight">

                                <h4 align="justify">Address : </h4>
                                    <p align="justify"></br>Power2U </br> c/o EIT InnoEnergy AB </br></br>Valhallavägen 79, </br>114 28 Stockholm. </br> Sweden </br></br><i class="fa fa-phone" aria-hidden="true"></i>   +46 707 34 95 51 </p>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    </br></br></br>

    <hr>

    <div class="container">
        <div class="row">

            <div class="col-sm-6 wowload fadeInLeft"><div class="hovereffect"><img class="img-responsive" src="images/photos/kic-l1.jpg" alt=""><div class="overlay"><div class="info" href="#"><p align="justify">ABOUT POWER2U</br></br>We are an energy startup within the incubation of InnoEnergy, Stockholm. We are working to build a Local System Operator(LSO) where we want to design and operate sustainable local energy systems.
                Power2U's LSO concept involves local generation and storage of energy and thus optimise price, quality and efficiency of current energy systems. It integrates an IoT platform as well to measure and manage the energy consumption by means of analytics and data visualisations and in doing so we aim to revolutionise the energy market.</p></div></div></div></div>

<div class="col-sm-6 wowload fadeInRight"><div class="hovereffect"><img class="img-responsive" src="images/photos/kic-l2.jpg" alt=""><div class="overlay"><div class="info" href="#"><p  align="justify">ABOUT INNOENERGY</br></br>InnoEnergy is the innovation engine for sustainable energy across Europe supported by the EIT. We support and invest in innovation at every stage of the journey – from classroom to end-customer. With our network of partners, we build connections across Europe, bringing together inventors and industry, graduates and employers, researchers and entrepreneurs, businesses and markets. We work in three essential areas of the innovation mix:</p>

<p style="margin-bottom:4px;" align="justify">&lowast; Education to help create an informed and ambitious workforce that understands the demands of sustainability and the needs of industry.</p>
<p style="margin-bottom:4px;" align="justify">&lowast; Innovation Projects to bring together ideas, inventors and industry to create commercially attractive technologies that deliver real results to customers.</p>
<p align="justify">&lowast; Business Creation Services to support entrepreneurs and start-ups who are expanding Europe’s energy ecosystem with their innovative offerings.</p>

<p align="justify">Bringing these disciplines together maximises the impact of each, accelerates the development of market-ready solutions, and creates a fertile environment in which we can sell the innovative results of our work.</p></div></div></div></div>

        </div>
    </div>



</div>
</br></br></br></br>

<?php include 'footer.php';?>

