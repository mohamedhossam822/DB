<html>
<div >
    <h1>Results :</h1>
    <br/>
    <?php for ($i = 0; $i < count($usersfound); $i++) { ?>
      <div>
        <?php echo $usersfound[$i]['Email'].'<br>'; ?>
        <?php echo $usersfound[$i]['NickName'].'<br>'; ?>
      </div>
    <?php } ?>
</div>
</html>
