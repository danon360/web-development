<!DOCTYPE html>
<html>
<head> <title> quest 2</title></head>
<body>
  <?php
  //1) a string query is whatever you pass after ? in the url. its purpose is to help us
  //    get variables from the user bak to the server.
  //2) a query string is a characteristic or the get method since the post method is encoded
  //    and when called upon with a query string, it ignores it and provides you with a resetted page.
  //3) the part after a "?" is considered the query stirng
  //4) in this case, 3 parameters are being passed.
//function printin(){

    if(isset($_GET['name'],$_GET['age'],$_GET['number'])){
      if(!(empty($_GET['name'])||empty($_GET['age'])||empty($_GET['number']))){
        $name=$_GET['name'];
        $age=$_GET['age'];
        $number=$_GET['number'];
        print_r("
        <table border='1'style='background-color:aqua;border-collapse: collapse;text-align:center;'>
          <tr>
            <td>
              Name:
            </td>
            <td>
              $name
            </td>
          </tr>
          <tr>
            <td>
              Age:
            </td>
            <td>
              $age
            </td>
          </tr>
          <tr>
            <td>
              Number:
            </td>
            <td>
              $number
            </td>
          </tr>
        </table>");
      }else{
        Print_r("“No query string data found.");
      }
    }

   ?>
  <form method="get">
    <table border="1"id="frm">
      <tr>
        <td>
          Name:
        </td>
        <td>
          <input type="text" placeholder="please input name" name="name"></input>
        </td>
      </tr>
      <tr>
        <td>
          Age:
        </td>
        <td>
          <input type="number" placeholder=" please enter your age" name="age"></input>
        </td>
      </tr>
      <tr>
        <td>
          Number:
        </td>
        <td>
          <input type="number" placeholder="please enter your number" name="number"></input>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit"></input>
        </td>
      </tr>

    </table>
  </form>
</body>
</html>
