<?php

          ?>
          <form action="index.php?opcija=logovanje" method="post">
              <table>
                  <tr>
                      <td>
                          Username
                      </td>
                      <td>
                          <input type="text" name="username">
                      </td>
                  </tr>
                  <tr>
                      <td>
                          Password
                      </td>
                      <td>
                          <input type="password" name="password">
                      </td>
                  </tr>
                  </tr>
                  <tr>

                      <td colspan="2">
                          <input type="submit" name="submit" value="Prijavi se">
                      </td>
                  </tr>

              </table>
          </form>


          <?php
//require_once ("konektor.php");

          if (isset($_POST['submit'])) {
              require_once("konektor.php");
              require_once("proveralogovanja.php");

          }
          ?>

          <br>  Ako nemate nalog <a href="registracija.php"> registrujte se</a>
          <?php


