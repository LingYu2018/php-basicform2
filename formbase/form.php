<!DOCTYPE html>
<html>
<head>
  <title>Sign Up!</title>
    <link href="style-main.css" rel="stylesheet">
    </head>
    <body>
    <div id="header"><img src="img/ph-header2.png" width="739" height="135"></div>
        <div id="topline"></div>
        <div id="mainContent">
            
        <h1>Hello the Inside!</h1>
            <form action="formaction.php" method="post" name="signup" id="signup">
                
             <h2>Contact Infor</h2>
                <p>
                <label for="name">Name: </label>
                <input name="name" type="text" id="name" size="60">
                    <label for="email">Email: </label>
                    <input name="email" type="text" id="email" size="60">              
                    
                </p>
                
                <h2>Your Interests</h2>
                <p>
                Experience Level1:<br>
                    <label><input name="level" type="radio" id="expert" value="expert"> Expert</label>
                <label><input name="level"type="radio" id="decent" value="decent">Decent</label>
                
                </p>
                <p>What do you read?<br>
                <label><input name="publications[]" type="checkbox" id="publications_drf" value="BuzzFeed">BuzzFeed</label><br>
                    <label><input name="publications[]" type="checkbox" id="publications_elle" value="Reddit">Reddit</label>   
                
                </p>
                <p>Fun Stuff:<br>
                <select name="howoftentrack" id="howoftentrack">
                <option value="daily">Weekly HightLights</option>
                <option value="yearly">GIFs</option>
                    <option value="email-reminds">Forgotten Emails</option>
                    </select>      
                </p>
                <p>Tell us about yourself!
                <textarea name="comments" id="comments" cols="52" rows="5">
                </textarea>
                </p>
                <input class="button lgButton" type="submit" name="submit" id="submit" value="Sign Me Up!">
                
                
            </form>
            
        </div>
    
    <div id="footer">
        <a href="#">Change Your Email</a>
        <a href="#">contact The Insider</a>
        </div>
    
    </body>
</html>