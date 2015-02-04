 <?php
session_start();                          // declare that sessions are being used
session_unset();                         // unset sessions
session_destroy();                      // now destory them and remove them from the users browser
header('Location: http://thewebbster.info/post/loginForm.php?logout=yes');// Forwards to a new page after logout
exit();                                    // exit
?> 