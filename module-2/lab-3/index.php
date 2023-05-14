<?php include "math_test.php";?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Перевірка усного рахунку.</title>
    <link
      rel="stylesheet"
      href="main.css"
    />
  </head>

  <body>
    <h1 class="center">Математичний тест</h1>
    <!--80-->
    <hr />
    <form name="test" method="post">
      <table class="center options">
        <tr>
          <td>
            <input
              id="d1"
              type="submit"
							name="max_value"
              value="10"
            />
          </td>
          <td>
            <input
              id="d2"
              type="submit"
							name="max_value"
              value="20"
            />
          </td>
          <td>
            <input
              id="d3"
              type="submit"
							name="max_value"
              value="100"
            />
          </td>
          <td>
            <input
              id="d4"
              type="submit"
							name="max_value"
              value="200"
            />
          </td>
          <td class="sign">
            <input
              id="plus"
              type="submit"
							name="operator"
              value="+"
            />
          </td>
          <td class="sign">
            <input
              id="minus"
              type="submit"
							name="operator"
              value="-"
            />
          </td>
          <td class="sign">
            <input
              id="multiply"
              type="submit"
							name="operator"
              value="*"
            />
          </td>
        </tr>
      </table>
      <hr />
      <!--90-->
      <table class="center">
        <tr>
          <td>
            <input
              id="first_operand"
							name="first_operand"
              size="3"
              maxlength="3"
							value="<?php echo $first_operand?>"
            />
          </td>
          <td>
            <input
              id="operator"
              size="1"
              maxlength="1"
							value="<?php echo $operator;?>"
            />
          </td>
          <td>
            <input
							id="second_operand"
							name="second_operand"
              size="3"
              maxlength="3"
							value="<?php echo $second_operand?>"
            />
          </td>
          <td>=</td>
          <td>
            <input
              id="user_answer"
							name="user_answer"
              size="4"
              maxlength="4"
							value="<?php echo $user_answer?>"
            />
          </td>
          <td>
            <input
              id="randomize_operands"
							name="randomize_operands"
              type="submit"
              value="?"
            />
          </td>
          <td>
            <input
              id="r0"
              value="<?php echo $result;?>"
            />
          </td>
        </tr>
      </table>
      <hr />
      <!--100-->
      <table id="keyboard">
        <tr>
          <td>
            <input
              id="b1"
              type="submit"
							name="num"
              value="1"
            />
          </td>
          <td>
            <input
              id="b2"
              type="submit"
							name="num"
              value="2"
            />
          </td>
          <td>
            <input
              id="b3"
              type="submit"
							name="num"
              value="3"
            />
          </td>
        </tr>
        <tr>
          <td>
            <input
              id="b4"
              type="submit"
							name="num"
              value="4"
            />
          </td>
          <td>
            <input
              id="b5"
              type="submit"
							name="num"
              value="5"
            />
          </td>
          <td>
            <input
              id="b6"
              type="submit"
							name="num"
              value="6"
            />
          </td>
        </tr>
        <tr>
          <td>
            <input
              id="b7"
              type="submit"
							name="num"
              value="7"
            />
          </td>
          <td>
            <input
              id="b8"
              type="submit"
							name="num"
              value="8"
            />
          </td>
          <td>
            <input
              id="b9"
              type="submit"
							name="num"
              value="9"
            />
          </td>
        </tr>
        <tr>
          <td>
            <input
              id="b0"
              type="submit"
							name="num"
              value="0"
            />
          </td>
          <td colspan="2">
            <input
              id="check_answer"
							name="check_answer"
              type="submit"
              value="OK"
            />
          </td>
        </tr>
      </table>
    </form>
    <hr />
  </body>
</html>
