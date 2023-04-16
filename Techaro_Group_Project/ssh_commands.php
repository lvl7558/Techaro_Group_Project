<?php
    $name = 'Homepage';
    include 'assets/php/nav.php';
?>
    <main>
        <div>
            <h1>SSH Commands</h1>
        </div>
        <div>
            <h2>Some titles</h2>
            <p>scp - Secure File Copy</p>
            <p>scp is a program for copying files between computers. It uses the SSH protocol. It is included by default in most Linux and Unix distributions. It is also included in the Tectia SSH and OpenSSH packages.</p>
            <p>The basic usage of scp is as follows:</p>
            <p>scp file host:path</p>
            <p>This copies the file to the remote host. The destination path is optional, but can be a directory on the server, or even a file name if copying a single file. It is possible to specify multiple files; the last one is the destination.</p>
            <p>To copy a file from the remote host, use:</p>
            <p>scp host:file path</p>
            <p>This fetches the file from the host, and puts it in the directory indicated by path
                Copying directory trees with scp
                </p>
            <p>To cpoy entire directory trees instead of single files, add the -roption. For example:</p>
            <p>scp -r host:path/directory .</p>
            <p>This would fetch path/directory from the host, copying it to the current working directory (creating directory in current working directory).</p>
        </div>
        <div>
            <h2>SSH File Transfer Protocol (SFTP): Get SFTP client & server</h2>
            <p>SFTP (SSH File Transfer Protocol) is a secure file transfer protocol. It runs over the SSH protocol. It supports the full security and authentication functionality of SSH.</p>
            <p>SFTP has pretty much replaced legacy FTP as a file transfer protocol, and is quickly replacing FTP/S. It provides all the functionality offered by these protocols, but more securely and more reliably, with easier configuration. There is basically no reason to use the legacy protocols any more.</p>
            <p>SFTP also protects against password sniffing and man-in-the-middle attacks. It protects the integrity of the data using encryption and cryptographic hash functions, and autenticates both the server and the user.</p>
        </div>
        <div>
            <h2>SCP Command on Linux</h2>
            <p>The scp command is a file transfer program for SFTP in Linux. The scp command line interface was designed after the old rcp command in BSD Unix. The scp also usually comes with the OpenSSH package.</p>
            <p>Its typical use is:</p>
            <p>scp [-r] file ... [user@]host:[path]</p>
            <p>Basically, this copies one or more files to the given host. If useris given, then they are copied to that account on the host. If no user is supplied, then the same user name as on the client side is assumed. If path is given, then the files are copied to that directory (relative to the given user's home directory). If no path is given, the files are copied to the user's home directory. If the 
                -r option is supplied, then files may be directories, and the given directory and all its subdirectories and files in them (recursively) are copied.
                </p>
            <p>
                One can also copy in the reverse direction:
            </p>
            <p>scp [-r] [user@]host:file path</p>
        
        </div>
        <div>
            <h2>SFTP Command on Linux</h2>
            <p>The sftp command in Linux is a client program for SFTP. The  sftp command line interface was designed to be similar to the ftp command. The sftp command is typically part of the OpenSSH package.</p>
            <p>UPLOADING/DOWNLOADING FILES AND DIRECTORIES TO SERVER 
                Upload a file using SFTP or SCP commands
                </p>
            <p>Use the SFTP or SCP client of your choice. Click "Enter/Return" on your keyboard after each command. Note: Commands are case-sensitive and all alphabetic characters must be lowercase.</p>
            <!--Make 2x3 grid-->
            <div>
                <div>
                    <div>Method</div>
                    <div>SFTP</div>
                    <div>Secure Copy</div>
                </div>
                <div>
                    <div>Commands</div>
                    <div>
                        <ol>
                            <li>Using your institution's assigned username, enter the following command: sftp [username]@[data center]</li>
                            <li>Enter your institution's assigned password</li>
                            <li>Choose directory (see directory folders): Enter cd [directory name or path]</li>
                            <li>Enter put [myfile] (copies file from your local system to OCLC's system)</li>
                            <li>Enter quit</li>
                        </ol>
                    </div>
                    <div>
                        <ol>
                            <li>Enter scp [myfile] [username]@[data center]:[directory name or path] (see directory folders)</li>
                            <li>Enter the password when prompted</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
<?php
    include "assets/php/footer.php";
?>