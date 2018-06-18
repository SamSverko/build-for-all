<p tabindex="0">Many people who have visual disabilities or require keyboard only access require items on the page to be focussed and selectable without the click of a mouse or finger tap. This is important to consider when creating buttons, text boxes, and most other forms of navigation on a web page. Most commonly people that do not use touch sources like mice, touchpads, or tap with their fingers, use the tab key on the keyboard to navigate interactive elements on a web page.</p>

<p tabindex="0">In order for you to make your website accessible to the tab key navigation you must put focus on your interactive elements using the HTML <code>tabindex</code> attribute.</p>

<p tabindex="0">The tabindex attribute moves sequentially based on the order of the HTML source. Use <code>tabindex="0"</code> in order for the navigation to follow the natural order. For the purposes of simplicity and universal design, web content should be predictable and act in a predictable manner. <code>tabindex="0"</code> is the best way to implement this accessibility technique. Please see the Caution section below for tabindex values that are not equal to 0.</p>

<p tabindex="0">It should be noted that some elements are focusable by default. Keyboard interactions are automatically registered by the browser if using one of the following HTML elements:</p>

<ol>
  <li>
    <p tabindex="0">Anchor element including <code>href</code> attribute</p>
  </li>
  <li>
    <p tabindex="0">Area element including <code>href</code> attribute</p>
  </li>
  <li>
    <p tabindex="0">Button element</p>
  </li>
  <li>
    <p tabindex="0">Input element</p>
  </li>
  <li>
    <p tabindex="0">Select element</p>
  </li>
  <li>
    <p tabindex="0">Text area element</p>
  </li>
</ol>

<p tabindex="0">The tabindex attribute should be used if repurposing or looking to add focus to an HTML element that is not focusable by default. If you are looking to make additional HTML elements focusable, such as anchor, area, container units like div and span, paragraph, ordered and unordered list, or hyperlink, using the tabindex attribute is the best way to do this.</p>

  <p tabindex="0">Example:</p>

  <code tabindex="0">
    <xmp>
      <ul tabindex="0">
        <li tabindex="-1">Item 1</li>
        <li tabindex="-1">Item 2</li>
        <li tabindex="-1">Item 3</li>
        <li tabindex="-1">Item 4</li>
      </ul>
    </xmp>
  </code>

  <p tabindex="0">Another example:</p>

  <code tabindex="0">
    <xmp>
      <div tabindex="0">
        <h1 tabindex="0">Title</h1>
        <p tabindex="0">Some paragraph text</p>
        <img tabindex="0" src="#" alt="Example image">
      </div>
    </xmp>
  </code>

  <p tabindex="0" class="font-bold">Caution:</p>

  <p tabindex="0">If you begin using <code>tabindex</code> with numbers beyond 0 the navigation can get very messy and confuse the user. Only use <code>tabindex</code> with a number beyond 0 if there is an absolute necessity for an interactive element to be accessed first. It is not usually a good idea.</p>

  <p tabindex="0">If using a negative number the such as <code>tabindex="-1"</code> the user cannot navigate to the element, but the information it is associated with will be placed as a focusable element that will be addressed by the script.</p>
