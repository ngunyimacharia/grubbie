<nav class="admin">
  <ul>
    <li>
      <a href="http://localhost/grubbie/user/manage.php">
        <i class="far fa-user" title="Users"></i>
        <span>Users</span>
      </a>
    </li>
    <li>
      <a href="http://localhost/grubbie/menu/create.php">
        <i class="fas fa-utensils" title="Meals"></i>
        <span>Meals</span>
      </a>
    </li>
    <li>
      <a href="http://localhost/grubbie/inventory/view.php">
        <i class="far fa-clipboard"></i>
        <span>Inventory</span>
      </a>
    </li>
    <li>
      <a href="http://localhost/grubbie/rating/admin.php">
        <i class="far fa-thumbs-up" title="Ratings"></i>
        <span>Ratings</span>
      </a>
    </li>
    <li>
      <a  id="notifications" href="http://localhost/grubbie/user/admin-notifications.php">
        <div>
          <i class="far fa-envelope" title="Messages"></i>
          <div class="notifications-notice">&nbsp;</div>
        </div>
        <span>Messages</span>
      </a>
      <div class="notifications-container">
        <div class="arrow-up"></div>
        <div class="notification">

          <img src="http://localhost/grubbie/assets/images/inventory_icon_inv.png" alt="Clipboard" title="Clipboard"/>
          <div>
            <a href="http://localhost/grubbie/orders/view.php"><p>The menu for this week has been published</p></a>
            <span class="timestamp">1 hour ago</span>
          </div>
        </div>
        <div class="notification">

          <img src="http://localhost/grubbie/assets/images/inventory_icon_inv.png" alt="Clipboard" title="Clipboard"/>
          <div>
            <a href="http://localhost/grubbie/orders/view.php">
              <p>
                A comment has been added a submitted menu
              </p>
            </a>
            <span class="timestamp">1 day ago</span>
          </div>
        </div>
        <div class="notification">

          <img src="http://localhost/grubbie/assets/images/inventory_icon_inv.png" alt="Clipboard" title="Clipboard"/>
          <div>
            <a href="http://localhost/grubbie/orders/view.php"><p>A new user needs activation.</p></a>
            <span class="timestamp">7 days ago</span>
          </div>
        </div>
        <div class="notification">

          <img src="http://localhost/grubbie/assets/images/inventory_icon_inv.png" alt="Clipboard" title="Clipboard"/>
          <div>
            <a href="http://localhost/grubbie/orders/view.php"><p>A new feedback message has been sent.</p></a>
            <span class="timestamp">14 days ago</span>
          </div>
        </div>
        <div class="notification">

          <img src="http://localhost/grubbie/assets/images/inventory_icon_inv.png" alt="Clipboard" title="Clipboard"/>
          <div>
            <a href="http://localhost/grubbie/orders/view.php"><p>New message from the superadmin.</p></a>
            <span class="timestamp">21 days ago</span>
          </div>
        </div>
      </div>
    </li>
  </ul>
</nav>
