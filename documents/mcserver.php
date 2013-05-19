<?php
$dir = "../";
$title = "How to set up a minecraft server - Milfordsworld.com";
require_once("../head.php")
?>
<h2>How to set up a Minecraft server</h2>

(Note: This will be a long guide, and basic computer literacy is assumed. If you do not possess that, spare time and google can help remedy the situation)
<p>
Firstly, I will need to cover what Minecraft is. Minecraft is an indie game with a focus on Open World game play. It is 3D and features pixellated graphics. The main components of the game are mining up blocks to gain resources, crafting blocks into tools and items, and placing blocks down to create structures. It also has features of zombie survival, with "Creeps" coming out at night, which attack the player. 
<p>
This is all quite fun however, it can get boring just building stuff by yourself. The game does have a multiplayer aspect, which allows for social game play, and the ability to show off your creations to your friends. 
<p>
You need a server to play multiplayer. You and your friends could all just join a public server and play together, you could set up a LAN game either with a real LAN or Hamatchi, or you could start your own server.  This is the option that we will explore. 
<p>
There are several different types of server you can set up. These usually differ in the times they are on and who you are planning to play with. For example, you might like to play with your friends every weekend. Or on the other hand you might like to set up a large, public, server that is on 24/7. The main options are how many people you want to be able to play with, whether it will be a public server and how often or how long it will be on for. The type I will be looking at is a server for friends that is on 24/7. 
<p>
Setting up a 24/7 server isn't for everyone though. If you just want to play with your friends on a friday night then you can just set up a Hamatchi network. If you just want to play Minecraft on the same map where ever you go, get Minecraft portable. So why would you set up a server?
<p>
- You want to have a gathering point for all your friends who play Minecraft 
<p>
- You want to learn about Networks
<p>
- You want to learn about servers
<p>
- You host other services which should be on 24/7
<p>
Before you choose which type of server you want to set up, particularly if you want to set up a 24/7 server, you should calculate the cost of running the server and shop around and see if you can get a cheaper deal for Minecraft server hosting. The more players you are hosting, the more chance it is better to get hosting rather than doing it yourself (due to bandwidth, electricity and hardware requirements). To find out how much electricity your prospective server machine uses, look around the internet or at the manufacturer's website. If you can't find anything, use the wattage of the PSU as an estimate, although that is always higher than the amount of electricity the computer will use.
<p>
What you will need to set up your own server
You will need:
- One or Two routers (using two routers is recommended as it provides greater security)
- Ethernet cables
- A spare computer (NOT your workstation PC/Mac)
- A good internet connection.
<p>
The internet connection is the vital part. If you don't have a good internet connection then all the hardware in the world will not help you make a decent server. You generally need about 0.3 Megabits/second upload speed per person. You upload speed is dependent on many factors, not just your ISP. I have also found that many of the online speed test results are not accurate (at least for upload speed). The best way to test how many people you can host is just test it on a computer in your network with more than enough CPU processing power and RAM, so that the network is the bottle neck. Then get your friends to connect and do things until it starts to lag. If you don't plan on getting a great internet connection, then there is no point spending too much money on hardware.
<p>
The computer is probably the most customisable part, and is mainly determined by how many people you want to be able to host, and  how much money you have.  If you have a large budget you can buy or make your own new PC or laptop that will be more than good enough for around $500. If you go to eBay, you will be able to find a decent  PC for $70-$300 quite easily. Decommissioned business servers can easily be picked up for $100-$200. The only problem with server hardware is that it is loud, and it uses up a large amount of electricity! So if you are interested in getting server hardware make sure you have a shed or basement in which you can keep them, unless you want to buy a sound proof cabinet. You should also calculate the cost of running them. You can pick up decent laptops for any where from $100 to $200. However, on eBay, the prices aren't fixed, so the longer you look, the more (and better) bargains you find. 
<p>
Laptops can make quite good servers as well, as they are small, quiet, energy efficient and have a built in Uninterrupted Power Supply. A downside is they cost a bit more. However, this cost will easily be offset by the little electricity they use. To put it into perspective, An average laptop will use around 30 watts, a small form factor pc will use 100 watts and a server 200 watts or more. 
<p>
The specifications that you are looking for in a server are a single or dual core with anywhere from 2GHz to 3GHz clock speed. Obviously, the newer and faster the processor is, the more people you will be able to host. Minecraft cannot run on multiple cores, but a dual core can be useful if you want to run a web server on the other core. Servers can get by with  512 megabytes of ram, but 2 gigabytes is better, and stops you from running out of ram if too many people join, and means the operating system can have more ram. A hard drive is also needed to store the files on. The hard drive doesn't have to be big, my Minecraft server, operating system and web server take up 4 gigabytes of space total. The faster the hard drive's read and write speeds are, the better as Minecraft will consistently be doing tiny read and writes. An SSD might sound perfect, but the amount of read/writes you will be doing will burn out the SSD very quickly.
<p>
You will need at least 4 networking cables, perhaps more, depending on how you set up the rest of your computers. The exact amount will be explained later in the guide. Networking cables generally cost $1.50 a metre, and it is up to you to decide how long you want them. Network cables are usually called Ethernet cables.  A more specific name is 'CAT 5 cable (RJ45)'. You can find these on eBay, or your local office supplies store.
<p>
You can use either one or two routers. If you use two routers the setting up the network will be a bit more complicated but the security will be a little less of a concern. If you use one router setting up the network will be easier, but you will need to be more careful with the security. This is because with two routers you can isolate the server so that if it is breached, the other computers will not be at risk. However, there are steps you can take to secure your server (these include use of firewalls, network logging, separate users for web services and much more). In your home network you will need at the very minimum one modem and one router. Quite often these are combined into one. If you want a wireless network, you will also need a wireless access point. If you are going to set up with two routers then you will also need another router.
<p>

Now that you have all the gear, it's time to set up. Firstly, the computer will need an operating system. You can buy windows but personally I think it is a waste of money. Of course, if you have the money and don't understand Linux then it will save you a lot of time, but if you don't have enough money and think you can learn about or better yet, already understand Linux then don't buy it. If you want to use Linux, you can download Ubuntu (which is free, and a lot better). Ubuntu does have a learning curve, especially for windows users but this guide is not about Ubuntu so the best bit of advice I can give you for that is "Google is your friend". Ubuntu is also a lot faster and efficient than windows, and uses less processing power and ram, giving your Minecraft server more power. If you are new to Ubuntu, get Ubuntu desktop, as while the graphical will make some overhead, it will help you immensely. Then, once you understand enough, you can download the Server edition, which is better for servers but doesn't have a graphical user interface.
<p>
Once you have an operating system installed, you need to install the java runtime environment. There is a different method for both windows and Linux, and guides are simple enough to find if you can use google. Next, you need the Minecraft server software.  This can be found at the <a href="http://www.minecraft.net/download" target="blank">Minecraft download page</a>. Now you can run the server software.  It will take some configuring with the server.properties file but that is quite easy. For complete instructions on configuring server.properties, go to <a href="http://www.minecraftwiki.net/wiki/Server.properties" target="blank">Minecraftwiki server properties</a>. To test the configuration of the server, run the server and run a Minecraft client on the server machine and connect to "localhost" on whichever port you specified. Once you have your desired settings, it is time to set up the local network. (Note: you can test the settings after the network is set up but knowing it works without the network helps with finding out where the issue lies, if an issue occurs)
<p>
Now you will need to configuring the computers firewall so that it will allow traffic in on the port that you specified in server.properties . 'What is a port?' you say. If your server is a house, then the port is the door. By default all ports are inaccessible from the outside, and need to be opened. In windows this is pretty simple, all you need to do is allow the program in windows defender, it should even prompt you when you run the server. However, in Ubuntu or Linux, this will be a bit more difficult. I can't describe how to do this on every Linux firewall, but if you install UFW (sudo apt-get install ufw) configuring it is simple enough . The <a href="https://help.Ubuntu.com/community/UFW" target="blank">community documentation</a> for UFW may also help.
<p>
Now if you have the server connected to the local network (the network in your house), you can test it by running a Minecraft client on a different computer and trying to connect to the server. To connect to the server, you must know the IP address of the server. To find out the IP of a computer the easiest way is to access the command prompt on the server(search for "cmd" in the start menu in windows, or press open the "Terminal" in Linux) and run a command. The command is "ifconfig" for Linux and "ipconfig" for windows. This will print a few numbers, but one you are looking for is called the IPv4 and usually looks like '192.168.x.xxx' and is called IPv4. That is the servers IP address. Now you know the IP you can connect to the server in Minecraft by typing 'xxx.xxx.x.xxx:yyyyyy' where x is your IP and y is the port number that the server is configured to run on (if you left port number as default then you do not have to include it). If it works, congratulations. If it doesn't, there is an issue with the firewall, network or Minecraft server configuration.
<p>
For a home internet connection to work, you need a modem. Most, if not all modems nowadays are also routers. If you are using 2 routers, the modem needs 2 ethernet output ports. If it only has 1 ethernet port, then we need a piece of equipment called a switch. Basically all a switch does is turn 1 port into 8 or more. A switch can cost $11 or more.
<p>
<img class=diagram src="pictures/network1.jpg" alt="network diagram">
<img class=diagram src="pictures/network2.jpg" alt="network diagram">
<p>

To test our network configuration, all we need to do is make sure that every computer (server included) can access the internet.
<p>
Now we need to set up port forwarding. Port forwarding is telling the router that any connections coming in on a certain point should go to the server. Make sure you have a copy of your modem/routers instructions and the servers IP address (mentioned above). <a href="www.portforward.com" target=blank>portforward.com</a> is an invaluable resource. If you run into troubles, go there. 
<p>
To test port forwarding, you need a friend, or a nice neighbour. To do this, you need to access whatismyip.com and tell your friend your Ip address, and the port that the server is on (they also need to have Minecraft). Then tell them to try connect to your server. If they can connect, good! You have a fully operational Minecraft server. However, if it doesn't work, then you need to go back and check you have port forwarding set up. 
<p>
If you want to get a free domain which will work even if your IP changes, (a dynamic IP address) go to <a href="dyndns.com" target="blank">dyndns.com</a><p>
 By Jonathan Milford<p>
<a href="#top">Back To Top</a>
<?php
require_once("../foot.php")
?>



