<p>
                            <a href="#" class="btn btn-default" role="button" data-toggle="modal" data-target="#myModal3">Source</a>
                            <a href="http://ashleyfalsario.com/whack" class="btn btn-default" role="button" target="_blank">Play</a>
                        </p>
                            <!-- beginmodal -->
                            <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title" id="myModalLabel">JavaScript/jQuery Code</h4>
                                        </div>
                                        <div class="modal-body">
<!-- beginning whack js -->
<pre>&ltscript>
    var gameTime = 60;
    var score = 0;
    console.log(score);

    var random;
    var randDiv;
    var mole;
    var gameOn;
    var delay = 1000;

    $('#gameOn').click(function(event){

        gameOn =  setInterval(function(){

            random = Math.round(Math.random()*8);
            randDiv = $('.box').eq(random).click();
            mole = $('.mole')[random];

            $(mole).fadeIn(200).delay(delay).fadeOut(400);

            console.log(mole);

            $(mole).on('click', function(){
                $(this).fadeOut();
            });

        }, 2000);

        $('img').on('click', function(){
            $('#score').html(score += 1);
            switch(score){
                case 3: delay = 800;
                break;
                case 8: delay = 400;
                break;
                case 15: delay = 100;
                break;
            }
        });

        continueGame();
    });

    function levelTwo(){
        delay = 100;
    }

    function gameOver(){
        clearInterval(gameOn);
        $('#box').addClass('gameover').html('&ltp>GAME OVER&lt/p>').css('border', 'none');
        $('#gameOn').click(function() {
            location.reload();
        });
    }

    function continueGame(){
        setTimeout(function(){
            gameTime--;
            $('#timer').html(gameTime);

            if (gameTime > 0) {
                continueGame();
            } else {
                gameOver();
            }
        }, 1000);
    }
&lt/script></pre>
<!-- ending whack js -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- endmodal -->