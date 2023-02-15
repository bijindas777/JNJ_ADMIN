<section>
    <div>
        <div class="container">
            <div class="row wrapper">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="synergy">
                        <div class="logo">
                            <img class="imglogo" src="{{URL::asset('/image/logo.png')}}" alt="">
                        </div>
                        <div class="syntext">Synergy</div>
                        <div>
                            <p class="tag">"Where great minds and great teams unite"</p>
                        </div>
                    </div>
                    <div class="profile">
                        <div class="textpro" >MY  <span> PROFILE</span></div>
                        <div class="propic ">
                            <i class="fa fa-user" style="font-size:36px"></i>
                        </div>
                        
                        <div class="arrow">
                            <i class="fas fa-arrow-right fa-2x"></i>
                          </div>
                          
                        
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="project">
                        <div class="repo"> My Projects<span>  Repository</span></div>
                        <div class="repocircle"></div>
                    </div>
                    <div class="talent">
                        <div class="human">Human <span>Talent</span></div>
                        <div class="humancircle"></div>

                    </div>

                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="task">
                        <div class="mytask"> My <span>   Tasks</span></div>
                        <div class="taskcircle"></div>

                    </div>
                    <div class="sale">
                        <div class="spipe"> Sales<span>  & PipeLine</span></div>
                        <div class="salescircle"></div>


                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="message">
                        <div class="mymsge"> My<span> Message</span></div>
                        <div class="msgecircle"></div>


                    </div>
                    <div class="announcement">
                        <div class="micdiv">
                            <img class="mic" src="{{URL::asset('/image/mic.jpg')}}" alt="">
                        </div>
                        <div class="news"> News<span> Announcements</span></div>
                        <div class="newscircle"></div>
                        

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
   
    .wrapper{
        display: grid;
        grid-template-columns: 200px 200px 200px 200px;
        column-gap: 60px;
        row-gap: 1em;
        /* display: flex; */
        justify-content: center;
        align-items: center;
    }
.synergy{
    width: 18vw;
    height: 25vh;
    background-color: rgb(226, 226, 226);
    border-radius: 10%;
    padding: 5px;
    position: absolute;
    top: 70px;
    padding-top: 45px;
}
.syntext{
    margin-top: -80px;
    margin-left: 70px;
    font-weight: 800;    

    
}
.tag{
    width: 200px;
    margin-top: 5px;
    margin-left: 20px;
    
    
}
.logo{
    width: 75px;
    height: 75px;
    border-radius: 50%;
    background-color: gray;
    position: relative;
    top: -90px;
    left: 70px;
    border: 2px solid white;
    overflow: hidden;
}

.imglogo{
   width: 100px;
   margin-top: 20px;
   margin-left: -15px;
}
.profile{
    width: 18vw;
    height: 50vh;
    background-color: rgb(25, 124, 128);
    border-radius: 10%;
    padding: 20px;
    position: relative;
    top: 280px;

}

.textpro{
    width: 50px;
    margin-top: 150px;
    margin-left: 10px;
    color: white;
    transition: transform.2s;

}
.textpro:hover{
    -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5);

}
span{
    font-weight: 800;

}

.propic{
    width: 75px;
    height: 75px;
    border-radius: 50%;
    background-color: rgb(226, 226, 226);
    position: relative;
    top: -250px;
    left: 50px;
    border: 2px solid white;

}

.fa{
   margin-left: 20px;
   margin-top: 15px;
   color: rgb(118, 118, 118); 
}
.arrow{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    color: black;
    position: relative;
    top: -60px;
    left: 10px;
    border: 2px solid white;
    transition: transform.2s;

}
.arrow:hover{
    -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5);

}
.fas{
    margin-left: 10px;
    margin-top: 8px;
    color: white;
}

.project{
    width: 18vw;
    height: 40vh;
    background-color: rgb(250, 86, 52);
    border-radius: 10%;
    padding: 5px;
    position: absolute;
    
}

.repo{
    width: 75%;
    margin-top: 180px;
    color: white; 
    padding-left:10px;
}
.repocircle{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 2px solid white;
    margin-top: -225px;
    margin-left: 170px;
    background-color: greenyellow
}
.talent{
    width: 18vw;
    height: 40vh;
    background-color: rgb(83, 73, 73);
    border-radius: 10%;
    padding: 5px;
    position: relative;
    top: 310px ;

}

.human{
    width: 50%;
    margin-top: 150px;
    color: white; 
    padding-left:10px;
}
.humancircle{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 2px solid white;
    margin-top: -200px;
    margin-left: 170px;
    background-color: greenyellow
}
.task{
    width: 18vw;
    height: 40vh;
    background-color: rgb(109, 92, 232);
    border-radius: 10%;
    padding: 5px;
    position: absolute;

    
}

.mytask{
    width: 25%;
    margin-top: 150px;
    color: white; 
    padding-left:10px;
}
.taskcircle{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 2px solid white;
    margin-top: -200px;
    margin-left: 170px;
    background-color: rgb(252, 188, 91);
}

.sale{
    width: 18vw;
    height: 40vh;
    background-color: rgb(143, 126, 24);
    border-radius: 10%;
    padding: 5px;
    position: relative;
    top: 310px;
 
}

.spipe{
    width: 25%;
    margin-top: 150px;
    color: white; 
    padding-left:10px;
}
.salescircle{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 2px solid white;
    margin-top: -220px;
    margin-left: 170px;
    background-color:red;
}

.message{
    width: 18vw;
    height: 25vh;
    background-color: rgb(55, 180, 240);
    border-radius: 10%;
    padding: 5px;
    position: absolute;
    top: 50px;
    
}

.mymsge{
    width: 25%;
    margin-top: 60px;
    color: white; 
    padding-left:10px;
}
.msgecircle{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 2px solid white;
    margin-top: -105px;
    margin-left: 170px;
    background-color: greenyellow
}

.announcement{
    width: 18vw;
    height: 55vh;
    background-color: rgb(186, 36, 10);
    border-radius: 10%;
    padding: 5px;
    position: relative;
    top: 255px;
    overflow: hidden;
}

.news{
    width: 25%;
    margin-top: 250px;
    color: white; 
    padding-left:10px;
    position: relative;
}
.newscircle{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 2px solid white;
    margin-top: -300px;
    margin-left: 170px;
    background-color: greenyellow;
    position: relative;
}

.mic{
    width: 250px;
    height: 370px;
    margin-top: 0px;
    margin-left: 0px;
    border: 0;
    position: absolute;
}

</style>