<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @author Geoffray Warnants
 * @version 0.2b
 */

//
// Database "Blogging-Platform"
//

// Blogging-Platform.posts
$posts = array(
  array('title'=>443436363,'text'=>'gdfasdfghertfbhs','id'=>15),
  array('title'=>'Jinda','text'=>'eaghtrfehdgtfbh','id'=>14),
  array('title'=>'Space fillers','text'=>'Unfortunately I must do some testing and as a result of this, more mindless words will fill up the DB. tbh I don\'t mind too much it will just make the important stuff harder to finds...','id'=>12),
  array('title'=>'Security','text'=>'http://shiflett.org/articles/cross-site-scripting

Could be interesting. Its about vulnerabilities and exploits. ','id'=>11),
  array('title'=>'DB logic','text'=>'Actually that page in SE said you shouldn\'t really manage keys yourself. I\'m not sure I should make another column and make the other column sequential using updates and what not, or if I should change my whole logic.

If I use pajinate, I think I will probably have to fetch everything all at once and make it then a client side thing. 

Pros 
 - It makes less processing
 - After the first page I don\'t even have to send any more data.

Cons
 - Must send all data at once, could be quite large?
 - Rebutal: Each character is a byte. Lets assume we have 100 x 1000 word posts
   100 x 4000 characters 100 x 4 kilobytes. 400kb. Not super large. 400/60kbs = 6 seconds
   I\'m unsure if that would be pure hang time or not, but time shouldn\'t be too much of an issue.
','id'=>10),
  array('title'=>'Misuse of autoincrement','text'=>'&lt;a href=&quot;http://stackoverflow.com/questions/2214141/mysql-auto-increment-after-delete&quot;&gt; does teh link work&lt;/a&gt;

Basic idea:

Auto-incremented primary keys are used as a unique identifier and should *not* have a business purpose. Instead what should happen is another column should be used, perhaps autoincrement, perhaps not, and it updates every time you delete a record. ','id'=>8),
  array('title'=>'kk all is good. Auto increment may change things.','text'=>'So i\'ve got the newer/older post working now. But seeing i\'ve deleted posts, It may be screwed around by auto increment. Only time will tell. But that\'s something to remember if i add &quot;delete post&quot; feature.','id'=>7),
  array('title'=>'Test post #4','text'=>'So after this line there is 2 newlines.


And after this there is 2 lines tabbed in
Well. maybe not
      but spaces?','id'=>4),
  array('title'=>'This is my third blog post','text'=>'Testing with htmlspecial chars operating
Lets see if wee can get&lt;br&gt;
&lt;b&gt;bold&lt;/b&gt; huh.

Probs should change text wrapping in the text area?','id'=>3),
  array('title'=>'So, I decided to start blogging today','text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
 
&lt;b&gt;
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.&lt;/b&gt;

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.','id'=>2),
  array('title'=>'Sample Blog Post!','text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non lacus erat, a rutrum tortor. Etiam dui ante, suscipit vel vestibulum eget, accumsan nec tellus. In hac habitasse platea dictumst. Pellentesque ac dui nisi, ac consectetur ante. Nunc congue nunc eget erat pellentesque sodales. Fusce eu augue et eros iaculis porttitor vitae sit amet sapien. Mauris sagittis massa vel nisi consectetur non vulputate felis tempor. Nulla tristique magna vel odio tincidunt laoreet. Sed ultricies, lectus et faucibus luctus, justo quam malesuada est, vitae ultricies velit libero posuere odio. Donec sed ante in arcu mollis sagittis. Etiam vitae accumsan justo.

Proin non ipsum vel est adipiscing convallis quis euismod tellus. Ut nisl ligula, congue a condimentum id, accumsan eget lacus. Vivamus nec diam sit amet nisl commodo scelerisque eu id diam. Sed eget massa lobortis odio ullamcorper blandit. Curabitur sodales orci a eros rhoncus non ultricies lacus iaculis. Nam vitae convallis diam. Sed bibendum adipiscing erat, id pellentesque massa tempor id. Cras velit purus, vehicula id tempor id, pellentesque id nulla. Vivamus eu justo nulla.

Aliquam pulvinar tincidunt dapibus. Nulla lorem magna, iaculis eget vestibulum quis, interdum at nulla. Fusce volutpat dapibus turpis id pretium. Etiam mollis egestas nulla, id sodales enim varius eu. Sed mollis nisl sit amet felis consequat interdum. Proin molestie tincidunt arcu. Fusce id dolor felis. Curabitur at ligula ut nunc eleifend molestie quis sit amet metus. Nulla convallis est ac dui luctus a luctus purus auctor. Ut odio lacus, accumsan consequat ultrices at, scelerisque nec erat. Aliquam consequat elementum elementum. Nullam tincidunt faucibus urna quis egestas. Aenean rutrum, velit in volutpat sagittis, est tortor laoreet mauris, ac porttitor erat felis eu enim.

Duis vitae dui non purus suscipit faucibus eget sed neque. Donec sit amet mi id massa pulvinar tristique at sit amet mi. Sed hendrerit velit in lacus fringilla at tincidunt diam malesuada. Duis consectetur, massa a ultricies volutpat, neque sapien pharetra felis, eu pulvinar magna metus id erat. Integer eleifend lobortis elementum. Ut rhoncus tristique tempus. Quisque sodales, lorem sit amet accumsan tincidunt, urna lectus elementum arcu, in semper odio dolor eu nunc. Phasellus pretium consectetur pharetra. Vestibulum tristique molestie cursus. Nulla bibendum lobortis molestie. Praesent ut lorem at libero pretium elementum. Quisque at metus sed ipsum faucibus placerat ut eu lorem. Donec faucibus leo eget nulla bibendum vitae ultricies ligula egestas. Phasellus sollicitudin, orci molestie pellentesque aliquam, turpis felis mollis tellus, in feugiat nulla ipsum ut enim. Pellentesque viverra mi et sem vulputate lacinia. Nunc ornare nibh nec mi rutrum sodales.

Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet adipiscing dui. Phasellus id velit sed odio fringilla posuere. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris viverra nunc at neque imperdiet id porttitor mauris sollicitudin. Pellentesque arcu diam, imperdiet ut consequat sed, faucibus eget ligula. Sed in laoreet mauris.

Aenean consequat sodales arcu, volutpat commodo sapien ultricies tempus. Donec iaculis tortor sed sapien imperdiet nec mollis ligula pulvinar. Nulla vitae. ','id'=>1)
);
