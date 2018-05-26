<p>Take into consideration the order of an average website. There is typically a navigation bar at the top which contains numerous navigation and redirectional links. If someone is using a screen reader, keyboard navigation, or assistive technology they may have to click or maneuver through this extremely long process to access the main content. When users are able to use a trackpad, mouse, or their fingertips to navigate a page, they are able to easily skip over this navigational accessibility disaster.</p>

<p>The best way to make this accessible is to include a <b>Skip to Content</b> button or link at the beginning of each web page, as the first item on that page. This way users that have alternate means of navigating the web will not be required to manually go through each element on the navigation bar before accessing the content they look to reach.</p>

<p>Example:</p>

<code>
  <xmp>
    <body>
      <a href=”#skiptocontent”>Skip to page content</a>
      <!-- All navigational code -->
      <main id=”skiptocontent”>
        <h1>Skipping Repetitive Information and Long Lists</h1>
        <p>Take into consideration the order of an average website…</p>
      </body>
    </xmp>
  </code>

  <p class="font-bold">Creating Invisible Skip Nav Buttons Unless Using a Screen Reader or Keyboard Navigation</p>

  <p>Some companies and individuals find the requirement for a link or button to be the first object on the website to go against the design and function they are looking to implement. In this case there is a CSS work around that enables only users that are using a screen reader, keyboard navigation, or assistive technology to see or use this function.</p>

  <p>When using the tab key, or the equivalent in the selected assistive technology, is being used you are able to add focus to an element that would otherwise be hidden. By hiding the <b>Skip to Content</b> link until focus is brought to it, the design of your website is unaffected, unless required for accessibility purposes. Using the focus function in CSS allows the <b>Skip to Content</b> link to become visible for sighted users using assistive tech, or simply allows those using keyboard navigation or screen readers to access the link. In this way, you are making the content accessible to both sighted users and those with vision loss.</p>

  <p>Similar to our <a href="http://localhost:8888/build-for-all/content-page.php?article=7" target="_self">article on keyboard access and navigation</a>, focus enables a user to access content through using alternative means. By using a pseudo-class, you can style an element when it gets focus. The pseudo-class a:focus will allow you to maintain the aesthetic of your website, and maintain the invisibility of the <b>Skip to Content</b> link, unless the user uses the tab key or assistive technology to navigate. Once the user is no longer on the focussed item the website will return to its intended form.</p>

  <p>The CSS work around should be applied to your Skip to Content link or button. The naming of your link may be different than what is presented here so please ensure your naming is consistent between your HTML and CSS. For the purposes of this example we are using <code>id="skiptocontent"</code>.</p>

  <p>CSS</p>
  <code>
    <xmp>
      #skiptocontent a {
        position:absolute;
        left:-9999px;
        top:auto;
        width:1px;
        height:1px;
        overflow:hidden;
      }

      #skiptocontent a:focus {
        position:static;
        width:auto;
        height:auto;
      }
    </xmp>
  </code>

  <p>Please note you can style the <code>#skiptocontent</code> focus link in a way that matches your website’s aesthetic and branding, just keep in mind <a href="http://localhost:8888/build-for-all/content-page.php?article=3" target="_self">contrast and text visibility </a>.</p>

  <p class="font-bold">Caution:</p>

  <p>If you make the link entirely invisible, and only accessible to screen readers, those that have limited fine motor skills or use assistive technology to access websites will have to navigate through the long navigational menu to access your content.
    Using too many Skip to Content links can be just as difficult to navigate as a regular menu, keep it simple and limit to one or two on a page.</p>

    <p class="font-bold">Tip:</p>
    <p>This technique can also be used to skip over repetitive information.</p>
