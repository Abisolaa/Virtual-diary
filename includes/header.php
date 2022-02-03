<div class="flex-row-between px-4" style="margin-top: 12px;">
                <h4>Good <?php 
                            $dateTime = new DateTime('now', new DateTimeZone('Africa/Lagos')); 
                            $dateAtThemoment =  $dateTime->format("d/m/y  H:i A"); 

                            // echo $dateAtThemoment;

                            $myMoment = explode(" ",$dateAtThemoment) ;

                            echo ($myMoment[3] == "PM" ) ? "Afternoon" : "Morning" ;

                  ?>, <?php 


                            echo "<small>" . explode("@",$_SESSION["email"])[0]."</small>";

                  ?> </h4>
                <div class="icon-btn">
                    <a href="star.php" title="star">

                    <img style="    width: 1.7em;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAABNUlEQVRoge3ZsU7CUBTG8e8WBkhaV3XjQXwCXRxJWHQyoYvESePAZlxcHd3AyWfQN3BxtY0DrEZNUKP5XJjKUWilnN7k/MZz0+T8KaFJAYwxXnPSsHXFRjB5OyPQBrCx4p2yxnS8RiM6Sffde/awLl0xXf6w/N0Wsunoepi8EsBR9jCQrph+8tVC15HGYgD0vzazHNal8W8B3rAAbRagzQK0WYA2C9BmAdosQJsFaLMAbRagzQK0+RQwkoYeBXAgTcV3oxUzBjmofUen0mGRABI8Trtr5/9cbCnyBnw6ur0kjoalbFNAnoBnArtJHN6Vtk0BiwaMSLeTxuF9qdsUMDeAwENQq28nB82nVSyU17yf0Vt8fG09VnR54I87QOAGzbCTdmf/l6q81uXLBfr06CFnjPHWD2dpRJPaB8/BAAAAAElFTkSuQmCC"/>
                    </a>
                    <a href="logout.php" title="logout">

                      <svg style="width: 1.5em; height: 1.5em" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>

                    </a>
                </div>
                
            </div>
            <hr>