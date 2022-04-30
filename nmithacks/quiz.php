<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="quiz.css">
    <title>MH quiz</title>
</head>
<body>
    <div class="main">
      <div class="formpage">
          <form action="" method="POST">
          <h1>SpeakUp You Thoughts</h1>
          <div class="form-elem">        
                    <div class="input-group">
                    <p>Age</p>
                        <input type="radio" id="age" name="age"required>
                        <label for="Age"><span>10-14</span></label>
                        <input type="radio" id="age" name="age" required>
                        <label for="Age"><span>15-20</span></label>
                        <input type="radio" id="age" name="age" required>
                        <label for="Age"><span>20-30</span></label>
                        <input type="radio" id="age" name="age" required>
                        <label for="Age"><span>Above 30</span></label>
                    </div>
                    <div class="input-group">
                       <p>Gender</p>
                       <input type="radio" id="gender" name="gender"required>
                        <label for="gender"><span>Male</span></label>
                        <input type="radio" id="gender" name="gender"required>
                        <label for="gender"><span>Female</span></label>
                        <input type="radio" id="gender" name="gender"required>
                        <label for="gender"><span>LBGTQ+</span></label>
                    </div>
                     <div class="input-group">
                       <p>How frequently do u get irritated at someone?</p>
                       <input type="radio" id="irritation" name="irritation"required>
                        <label for="irritation"><span>Very rare</span></label>
                        <input type="radio" id="irritation" name="irritation"required>
                        <label for="irritation"><span>Sometimes</span></label>
                        <input type="radio" id="irritation" name="irritation"required>
                        <label for="irritation"><span>Always</span></label>
                    </div>
                    <div class="input-group">
                       <p>Do you have thoughts that would be better of dead or of hurting yourself anytime ?</p>
                       <input type="radio" id="thoughts" name="thoughts"required>
                        <label for="thoughts"><span>Yes</span></label>
                        <input type="radio" id="thoughts" name="thoughts"required>
                        <label for="thoughts"><span>No</span></label>
                    </div>
                    <div class="input-group">
                       <p>Did you previously have an heart attack ?</p>
                       <input type="radio" id="thoughts" name="heartattack"required>
                        <label for="heart attack"><span>Yes</span></label>
                        <input type="radio" id="thoughts" name="heartattack"required>
                        <label for="heart attack"><span>No</span></label>
                        <input type="radio" id="thoughts" name="heartattack"required>
                        <label for="heart attack"><span>Never</span></label>
                    </div>
                    <div class="input-group">
                       <p>Do you have thyroid ?</p>
                       <input type="radio" id="thyroid" name="thyroid"required>
                        <label for="thyroid"><span>Yes</span></label>
                        <input type="radio" id="thyroid" name="thyroid"required>
                        <label for="thyroid"><span>No</span></label>
                    </div>
                    <div class="input-group">
                       <p>Were you ever diagonised of cancer?</p>
                       <input type="radio" id="cancer" name="cancer" required>
                        <label for="cancer"><span>Yes</span></label>
                        <input type="radio" id=cancer"" name="cancer" required>
                        <label for="cancer"><span>No</span></label>
                    </div>
                    <div class="input-group">
                       <p>Do you identify yourself as a member of the LGBTQIA+ community?</p>
                       <input type="radio" id="la" name="la"required>
                        <label for="la"><span>Yes</span></label>
                        <input type="radio" id="la" name="la"required>
                        <label for="la"><span>No</span></label>
                    </div>
                    <div class="input-group">
                       <p>How often do you feel low, depressed or helpless?</p>
                       <input type="radio" id="depression" name="depression"required>
                        <label for="depression"><span>Never</span></label>
                        <input type="radio" id="depression" name="depression"required>
                        <label for="depression"><span>Sometimes</span></label>
                        <input type="radio" id="depression" name="depression"required>
                        <label for="depression"><span>Very Frequently</span></label>
                        <input type="radio" id="depression" name="depression"required>
                        <label for="depression"><span>All the time</span></label>
                    </div>
                    <div class="input-group">
                       <p>Do you have trouble sleeping or waking up in the morning?</p>
                       <input type="radio" id="sleeping" name="sleeping"required>
                        <label for="sleeping"><span>Yes</span></label>
                        <input type="radio" id="sleeping" name="sleeping"required>
                        <label for="sleeping"><span>No</span></label>
                    </div>
                    <div class="input-group">
                       <p>Do you frequently over eat?</p>
                       <input type="radio" id="eat" name="eat"required>
                        <label for="eat"><span>Yes</span></label>
                        <input type="radio" id="eat" name="eat"required>
                        <label for="eat"><span>No</span></label>
                    </div>
                    <div class="input-group">
                       <p>Do you feel your fellow mates are bullying you frequently?</p>
                       <input type="radio" id="bully" name="bully"required>
                        <label for="bully"><span>Yes</span></label>
                        <input type="radio" id="bully" name="bully"required>
                        <label for="bully"><span>No</span></label>
                    </div>
                    <div class="input-group">
                       <p>Were you ever diagnosed of any mental health diorder?</p>
                       <input type="radio" id="mental" name="mental"required>
                        <label for="mental"><span>Yes</span></label>
                        <input type="radio" id="mental" name="mental"required>
                        <label for="mental"><span>No</span></label>
                    </div>
                    <div class="input-group">
                       <p>Did you ever take any pills without consulting the doctor?</p>
                       <input type="radio" id="consult" name="consult"required>
                        <label for="consult"><span>Yes</span></label>
                        <input type="radio" id="consult" name="consult"required>
                        <label for="consult"><span>No</span></label>
                    </div>
                    <div class="input-group">
                       <p>Do you wish to share these details with a psychiatrist? If yes, we will be sharing the answers you responded to with them and they will suggest you a formal treatment.</p>
                       <input type="radio" id="psych" name="psych"required>
                        <label for="psych"><span>Yes</span></label>
                        <input type="radio" id="psych" name="psych"required>
                        <label for="psych"><span>No</span></label>
                    </div>
                    <div class="input-group">
                       <p>Any other information you want us to know to analyse your current mental health state?</p>
                       <input type="text" placeholder="share your feelings">
                    </div>
                    <div class="submit-btn">
                    <button type="submit" name="submit" class="sbt-btn">SUBMIT</button>
                </div>
          </div>
        </form>
        </div>
</div>
</body>
</html>