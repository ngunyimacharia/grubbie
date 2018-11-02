<?php include('includes/header.php'); ?>
 <div id="grubbie-gradient"></div>

<h1>Grubbie development Guide</h1>
Welcome!
<div class="documentation">
  <h2>What to include?</h2>

  <p>This section provides a description of all the various include files we have and how they are to be used.</p>

  <h3>Headers and Footers</h3>
  <p>
    Headers and footers are to be included in all pages. To include them for normal users, simply add the following lines at the start and end of your code.
    <blockquote>
        //Start of file<br/>
        &lt;?php include("../includes/header.php"); ?&gt;<br/>
        //All page content<br/>
        &lt;?php include("../includes/footer.php"); ?&gt;<br/>
        //End of page
    </blockquote>
    <br/>
    To include headers and footers specifically for the admins, use the code below. This should be done only for pages intended for viewing by the admin.
    <blockquote>
        //Start of file<br/>
        &lt;?php include("../includes/header.php"); ?&gt;<br/>
        //All page content<br/>
        &lt;?php include("../includes/footer.php"); ?&gt;<br/>
        //End of page
    </blockquote>
  </p>

  <h2>How to add assets? </h2>
  <p>
    We refer to assets as resources the website requests for in the browser. This includes js, css and images.
    To add assets, we advice using the whole (absolute) url instead of the relative url. For example:
    <blockquote>
        //Use the following<br/>
        &lt;img src="http://localhost/grubbie/assets/images/xyz.jpg"&gt;<br/>
        //Instead of<br/>
        &lt;img src="../assets/images/xyz.jpg"&gt;<br/>
    </blockquote>
  </p>


    <h2>Backgrounds</h2>
    <p>
      The default background on all the pages is the wooden background with a dark overay.To use the gradient background add the following code to the top of your page:
      <blockquote>
          &lt;div id="grubbie-gradient"&gt;&lt;/div&gt;<br/>
      </blockquote>
    </p>

</div>
<br/>
<hr/>
<h1>And now, lorem ipsum!</h1>

<div id="Translation">
  <h3>The standard Lorem Ipsum passage, used since the 1500s</h3>
  <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
  <h3>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h3>
  <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
  <h3>1914 translation by H. Rackham</h3>
  <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"</p>
  <h3>Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h3>
  <p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>
  <h3>1914 translation by H. Rackham</h3>
  <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."</p>
</div>
<?php include('includes/footer.php'); ?>
