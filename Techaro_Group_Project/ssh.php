

<?php
   $name = 'SSH';
   include 'assets/php/top_nav.php';


  
?>
<div id="nav-mobile">
   <?php include 'assets/php/mobile_nav.php'; ?>
</div>


<div id="nav-desktop">
   <?php include 'assets/php/nav2.php'; ?>
</div>
   <main  class="main1">


       <div>
           <h1>What is SSH?</h1>
       </div>
       <div class="jumpLinks">
       <ul class="linksUl">
           <li><a class="link" href="#pro">The SSH Protocol</a></li>
           <li><a class="link" href="#his">History of the SSH Protocol</a></li>
           <li><a class="link" href="#lin">Using the Linux client</a></li>
       </ul>
   </div>
       <div>
           <h2 class = "sshH2" id="pro">The SSH Protocol</h2>
           <div>
               <p>The SSH protocol uses encryption to secure the connection between a client and a server. All user
                   authentication, commands, output, and file transfers are encrypted to protect against attacks in the
                   network.</p>
               <img class="img2" src="assets/imgs/ssh.png" alt="SSH Protocol">
           </div>
          
       </div>
       <div id="his">
           <h2 class = "sshH2">History of the SSH Protocol</h2>
           <p>
               The Secure Shell protocol was originally developed by Tatu Ylonen in 1995 in response to a hacking
               incident in the Finnish university network. The incident triggered Ylonen to study cryptography and
               develop a solution he could use himself for remote login over the Internet safely. His friends proposed
               additional features, and three months later, in July 1995, Ylonen published the first version as open
               source. It became OpenSSH. Later he took the protocol for standardization at the IETF and designed the
               SSH File Transfer Protocol (SFTP). He founded SSH Communications Security Corp in December 1995 to
               provide commercial support for the protocol. Ylonen still works on topics related to Secure Shell,
               particularly around key management, as well as broader cybersecurity topics.
           </p>
           <p>
               Today, the protocol is used for managing more than half of world's web servers and practically every
               Unix or Linux computer, on-premise and in the cloud. Information security specialists and system
               administrators use it to configure, manage, maintain, and operate most firewalls, routers, switches, and
               servers in the millions of mission-critical networks and environments of our digital world. It is also
               embedded inside many file transfer and systems management solutions.
           </p>
           <p>The new protocol replaced several legacy tools and protocols, including telnet, ftp, FTP/S, rlogin, rsh,
               and rcp.</p>
           <p>
               Practically every Unix and Linux system includes the ssh command. This command is used to start the SSH
               client program that enables secure connection to the SSH server on a remote machine. The ssh command is
               used from logging into the remote machine, transferring files between the two machines, and for
               executing commands on the remote machine.
           </p>
       </div>
       <div id="lin">
           <h2 class = "sshH2">Using the Linux client</h2>
           <p>
               Linux typically uses the OpenSSH client. The ssh command to log into a remote machine is very simple. To
               log in to a remote computer called sample.ssh.com, type the following command at a shell prompt:
           </p>
           <div class="snippet">
           <pre><code class="language-bash">
               # logging into some website


               ssh sample.ssh.com
           </code></pre> </div>
   
           <p>
               If this is the first time you use ssh to connect to this remote machine, you will see a message like:
           </p>


           <div class="snippet">
           <pre><code class="language-bash">
               # First time connecting


               The authenticity of host 'sample.ssh.com' cannot be established. <br>
               DSA key fingerprint is 04:48:30:31:b0:f3:5a:9b:01:9d:b3:a7:38:e2:b1:0c.<br>
               Are you sure you want to continue connecting (yes/no)?
           </code></pre> </div>
          
              <p>Type
               yes to continue. This will add the server to your list of known hosts (
               ~/.ssh/known_hosts
               ) as seen in the following message:<br></p>


               <div class="snippet">
               <pre><code class="language-bash">
                   # Message from the terminal


                   Warning: Permanently added 'sample.ssh.com' (DSA) to the list of  known hosts.
               </code></pre> </div>
              


          
           <p>
               Each server has a host key, and the above question relates to verifying and saving the host key, so that next time you connect to the server, it can verify that it actually is the same server.
               Once the server connection has been established, the user is authenticated. Typically, it asks for a password. For some servers, you may be required to type in a one-time password generated by a special hardware token.
               Once authentication has been accepted, you will be at the shell prompt for the remote machine.
              
           </p>
       </div>
<?php
   include "assets/php/footer.php";
?>

