<!-- here is my form! -->

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
    <fieldset>
        <legend>Contact</legend>

        <label>First Name</label>
        <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">
        <span class="error"><?php echo $first_name_err ;?></span>

        <label>Last Name</label>
        <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
        <span class="error"><?php echo $last_name_err ;?></span>

        <label>Email</label>
        <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
        <span class="error"><?php echo $email_err ;?></span>

        <label>Gender</label>
        <ul>
            <li>
                <input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked" ';?>> Female
            </li>
            <li>
                <input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked" ';?>> Male
            </li>
            <li>
                <input type="radio" name="gender" value="neither" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'neither') echo 'checked="checked" ';?>> Neither
            </li>
        </ul>
        <span class="error"><?php echo $gender_err ;?></span>

        <label>Phone</label>
        <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
        <span class="error"><?php echo $phone_err ;?></span>

        <label>Favorite Genres</label>
        <ul>
            <li>
                <input type="checkbox" name="genres[]" value="action" <?php if(isset($_POST['genres']) && in_array('action', $genres)) echo 'checked="checked" ';?>> Action
            </li>
            <li>
                <input type="checkbox" name="genres[]" value="classics" <?php if(isset($_POST['genres']) && in_array('classics', $genres)) echo 'checked="checked" ';?>> Classics
            </li>
            <li>
                <input type="checkbox" name="genres[]" value="fantasy" <?php if(isset($_POST['genres']) && in_array('fantasy', $genres)) echo 'checked="checked" ';?>> Fantasy
            </li>
            <li>
                <input type="checkbox" name="genres[]" value="horror" <?php if(isset($_POST['genres']) && in_array('horror', $genres)) echo 'checked="checked" ';?>> Horror
            </li>
            <li>
                <input type="checkbox" name="genres[]" value="mystery" <?php if(isset($_POST['genres']) && in_array('mystery', $genres)) echo 'checked="checked" ';?>> Mystery
            </li>
            <li>
                <input type="checkbox" name="genres[]" value="romance" <?php if(isset($_POST['genres']) && in_array('romance', $genres)) echo 'checked="checked" ';?>> Romance
            </li>
            <li>
                <input type="checkbox" name="genres[]" value="sf" <?php if(isset($_POST['genres']) && in_array('sf', $genres)) echo 'checked="checked" ';?>> Science Fiction
            </li>
        </ul>
        <span class="error"><?php echo $genres_err ;?></span>

        <label>States</label>
        <select name="states">
            <option value="" NULL <?php if(isset($_POST['states']) && $_POST['states'] == NULL) echo 'selected = "unselected"' ;?>>Select one</option>
            <option value="al" <?php if(isset($_POST['states']) && $_POST['states'] == 'al') echo 'selected = "selected"' ;?>>Alabama</option>
            <option value="ak" <?php if(isset($_POST['states']) && $_POST['states'] == 'ak') echo 'selected = "selected"' ;?>>Alaska</option>
            <option value="az" <?php if(isset($_POST['states']) && $_POST['states'] == 'az') echo 'selected = "selected"' ;?>>Arizona</option>
            <option value="ar" <?php if(isset($_POST['states']) && $_POST['states'] == 'ar') echo 'selected = "selected"' ;?>>Arkansas</option>
            <option value="ca" <?php if(isset($_POST['states']) && $_POST['states'] == 'ca') echo 'selected = "selected"' ;?>>California</option>
            <option value="co" <?php if(isset($_POST['states']) && $_POST['states'] == 'co') echo 'selected = "selected"' ;?>>Colorado</option>
            <option value="ct" <?php if(isset($_POST['states']) && $_POST['states'] == 'ct') echo 'selected = "selected"' ;?>>Connecticut</option>
            <option value="de" <?php if(isset($_POST['states']) && $_POST['states'] == 'de') echo 'selected = "selected"' ;?>>Delaware</option>
            <option value="fl" <?php if(isset($_POST['states']) && $_POST['states'] == 'fl') echo 'selected = "selected"' ;?>>Florida</option>
            <option value="ga" <?php if(isset($_POST['states']) && $_POST['states'] == 'ga') echo 'selected = "selected"' ;?>>Georgia</option>
            <option value="hi" <?php if(isset($_POST['states']) && $_POST['states'] == 'hi') echo 'selected = "selected"' ;?>>Hawaii</option>
            <option value="id" <?php if(isset($_POST['states']) && $_POST['states'] == 'id') echo 'selected = "selected"' ;?>>Idaho</option>
            <option value="il" <?php if(isset($_POST['states']) && $_POST['states'] == 'il') echo 'selected = "selected"' ;?>>Illinois</option>
            <option value="in" <?php if(isset($_POST['states']) && $_POST['states'] == 'in') echo 'selected = "selected"' ;?>>Indiana</option>
            <option value="ia" <?php if(isset($_POST['states']) && $_POST['states'] == 'ia') echo 'selected = "selected"' ;?>>Iowa</option>
            <option value="ks" <?php if(isset($_POST['states']) && $_POST['states'] == 'ks') echo 'selected = "selected"' ;?>>Kansas</option>
            <option value="ky" <?php if(isset($_POST['states']) && $_POST['states'] == 'ky') echo 'selected = "selected"' ;?>>Kentucky</option>
            <option value="la" <?php if(isset($_POST['states']) && $_POST['states'] == 'la') echo 'selected = "selected"' ;?>>Louisiana</option>
            <option value="me" <?php if(isset($_POST['states']) && $_POST['states'] == 'me') echo 'selected = "selected"' ;?>>Maine</option>
            <option value="md" <?php if(isset($_POST['states']) && $_POST['states'] == 'md') echo 'selected = "selected"' ;?>>Maryland</option>
            <option value="ma" <?php if(isset($_POST['states']) && $_POST['states'] == 'ma') echo 'selected = "selected"' ;?>>Massachusetts</option>
            <option value="mi" <?php if(isset($_POST['states']) && $_POST['states'] == 'mi') echo 'selected = "selected"' ;?>>Michigan</option>
            <option value="mn" <?php if(isset($_POST['states']) && $_POST['states'] == 'mn') echo 'selected = "selected"' ;?>>Minnesota</option>
            <option value="ms" <?php if(isset($_POST['states']) && $_POST['states'] == 'ms') echo 'selected = "selected"' ;?>>Mississippi</option>
            <option value="mo" <?php if(isset($_POST['states']) && $_POST['states'] == 'mo') echo 'selected = "selected"' ;?>>Missouri</option>
            <option value="mt" <?php if(isset($_POST['states']) && $_POST['states'] == 'mt') echo 'selected = "selected"' ;?>>Montana</option>
            <option value="ne" <?php if(isset($_POST['states']) && $_POST['states'] == 'ne') echo 'selected = "selected"' ;?>>Nebraska</option>
            <option value="nv" <?php if(isset($_POST['states']) && $_POST['states'] == 'nv') echo 'selected = "selected"' ;?>>Nevada</option>
            <option value="nh" <?php if(isset($_POST['states']) && $_POST['states'] == 'nh') echo 'selected = "selected"' ;?>>New Hampshire</option>
            <option value="nj" <?php if(isset($_POST['states']) && $_POST['states'] == 'nj') echo 'selected = "selected"' ;?>>New Jersey</option>
            <option value="nm" <?php if(isset($_POST['states']) && $_POST['states'] == 'nm') echo 'selected = "selected"' ;?>>New Mexico</option>
            <option value="ny" <?php if(isset($_POST['states']) && $_POST['states'] == 'ny') echo 'selected = "selected"' ;?>>New York</option>
            <option value="nc" <?php if(isset($_POST['states']) && $_POST['states'] == 'nc') echo 'selected = "selected"' ;?>>North Carolina</option>
            <option value="nd" <?php if(isset($_POST['states']) && $_POST['states'] == 'nd') echo 'selected = "selected"' ;?>>North Dakota</option>
            <option value="oh" <?php if(isset($_POST['states']) && $_POST['states'] == 'oh') echo 'selected = "selected"' ;?>>Ohio</option>
            <option value="ok" <?php if(isset($_POST['states']) && $_POST['states'] == 'ok') echo 'selected = "selected"' ;?>>Oklahoma</option>
            <option value="or" <?php if(isset($_POST['states']) && $_POST['states'] == 'or') echo 'selected = "selected"' ;?>>Oregon</option>
            <option value="pa" <?php if(isset($_POST['states']) && $_POST['states'] == 'pa') echo 'selected = "selected"' ;?>>Pennsylvania</option>
            <option value="ri" <?php if(isset($_POST['states']) && $_POST['states'] == 'ri') echo 'selected = "selected"' ;?>>Rhode Island</option>
            <option value="sc" <?php if(isset($_POST['states']) && $_POST['states'] == 'sc') echo 'selected = "selected"' ;?>>South Carolina</option>
            <option value="sd" <?php if(isset($_POST['states']) && $_POST['states'] == 'sd') echo 'selected = "selected"' ;?>>South Dakota</option>
            <option value="tn" <?php if(isset($_POST['states']) && $_POST['states'] == 'tn') echo 'selected = "selected"' ;?>>Tennessee</option>
            <option value="tx" <?php if(isset($_POST['states']) && $_POST['states'] == 'tx') echo 'selected = "selected"' ;?>>Texas</option>
            <option value="ut" <?php if(isset($_POST['states']) && $_POST['states'] == 'ut') echo 'selected = "selected"' ;?>>Utah</option>
            <option value="vt" <?php if(isset($_POST['states']) && $_POST['states'] == 'vt') echo 'selected = "selected"' ;?>>Vermont</option>
            <option value="va" <?php if(isset($_POST['states']) && $_POST['states'] == 'va') echo 'selected = "selected"' ;?>>Virginia</option>
            <option value="wa" <?php if(isset($_POST['states']) && $_POST['states'] == 'wa') echo 'selected = "selected"' ;?>>Washington</option>
            <option value="wv" <?php if(isset($_POST['states']) && $_POST['states'] == 'wv') echo 'selected = "selected"' ;?>>West Virginia</option>
            <option value="wi" <?php if(isset($_POST['states']) && $_POST['states'] == 'wi') echo 'selected = "selected"' ;?>>Wisconsin</option>
            <option value="wy" <?php if(isset($_POST['states']) && $_POST['states'] == 'wy') echo 'selected = "selected"' ;?>>Wyoming</option>
        </select>
        <span class="error"><?php echo $states_err ;?></span>

        <label>Comments</label>
        <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>
        <span class="error"><?php echo $comments_err ;?></span>

        <label>Privacy</label>
        <ul>
            <li>
                <input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes') echo 'checked="checked" ';?>> You must agree!
            </li>
        </ul>
        <span class="error"><?php echo $privacy_err ;?></span>

        <input type="submit" value="Send it!">
        <input type="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF'] ;?>'" value="Reset">
    </fieldset>
</form>