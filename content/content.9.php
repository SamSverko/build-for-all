<!-- DONT FORMAT CODE -->

<p tabindex="0">The first step to accessibility in marketing is making your text inclusive. If no one can read what you are writing, it is as if you haven’t written anything of value at all. There are a number of easy ways you can make your text accessible.</p>

<ol>
  <li>
    <p tabindex="0">Inclusive Font</p>
    <ol type="a">
      <li>
        <p tabindex="0">Decorative and handwritten fonts may give a sense of elegance, however, they are relatively difficult to read, even for those with superior eyesight. Opt for a sans-serif font family such as Arial, Calibri, or Verdana.</p>
      </li>
      <li>
        <p tabindex="0">Please note that Verdana tends to be a favourite in accessibility as it was designed in a way that avoids letter confusion, namely the differentiation of the capital letter I and the lowercase letter l. In Arial, and other fonts, capital I and the lowercase l are indistinguishable.</p>
      </li>
      <li>
        <p tabindex="0">Illusion vs. <span style="font-family: arial, sans-serif">Illusion</span>: When writing text, please keep in mind to use mixed casing, use uppercase letters at the beginning of sentences, proper names, places etc. Avoid using all uppercase letters or all lowercase letters as word differentiation is more difficult.</p>
        <p tabindex="0">Example:</p>
        <code tabindex="0">font-family: 'Verdana', sans-serif;</code><br><br>
      </li>
    </ol>
  </li>
  <li>
    <p tabindex="0">Contrast and Colour</p>
    <ol type="a">
      <li>
        <p tabindex="0">The more contrast between the background and text, the easier it is to read the content. There should be high contrast between text and background.</p>
      </li>
      <li>
        <p tabindex="0">There are tools available to designers, marketers, and everyone else in fact that allow you to test the contrast between your text and background.</p>
      </li>
      <li>
        <p tabindex="0">Using this tool you should look to have a contrast ratio higher than <b>4.6:1</b>, with the maximum contrast ratio being <b>21:1</b>.</p>
      </li>
      <li>
        <p tabindex="0">Colour relates heavily to contrast, and while it may add personality it should be used sparingly. Materials, both printed and online, are easier to read when they are black and white. A rule of thumb is to restrict use of colours to headings, titles, and emphasized materials.</p>
      </li>
      <li>
        <p><p tabindex="0">Resource: <a href="https://webaim.org/resources/contrastchecker/" target="_blank">Learn more about contrast<i class="fas fa-external-link-alt"></i></a>.</p></p>
        <p tabindex="0">Good example:</p>
        <code tabindex="0">
          color: #FFFFFF; /* white */<br>
          background-color: #000000; /* black */<br>
          /* this give a contrast ratio 21.00:1  */<br><br>
        </code>
        <p tabindex="0">Bad example:</p>
        <code tabindex="0">
          color: #FFFFFF; /* white */<br>
          background-color: #CCCCCC; /* light grey */<br>
          /* this give a contrast ratio of only 1.61:1  */<br><br>
        </code>
      </li>
    </ol>
  </li>
  <li>
    <p tabindex="0">Text Size</p>
    <ol type="a">
      <li>
        <p tabindex="0">Text is easiest to read when it is sized between 12 and 18 pts. Anything outside of that range is difficult to read, as it either decreases the visibility of the words or takes up too much space to easily understand the concept.</p>
      </li>
      <li>
        <p tabindex="0">Also take into consideration that fonts differ, choose a size that is appropriate for the font family.</p>
        <p tabindex="0">Good example:</p>
        <code tabindex="0">
          font-size: 1em;<br><br>
        </code>
        <p tabindex="0">Bad example:</p>
        <code tabindex="0">
          font-size: 0.25em;<br><br>
        </code>
      </li>
    </ol>
  </li>
  <li>
    <p tabindex="0">Emphasis and Bolding</p>
    <ol type="a">
      <li>
        <p tabindex="0">For the purposes of emphasis choose to bold the text, rather than italicize it. Italics are more difficult to read as they shift people’s preconceived understanding of where letters ought to be and what they should look like. Italics also tends to thin the font lowering the readability.</p>
      </li>
      <li>
        <p tabindex="0">Avoid using fonts that are too thin or light. Thin fonts, much like low contrast text, make it difficult to separate the background from the text.</p>
        <p tabindex="0">Good example:</p>
        <code tabindex="0">
          font-weight: bold;<br><br>
        </code>
        <p tabindex="0">Bad example:</p>
        <code tabindex="0">
          font-style: italic;<br><br>
        </code>
      </li>
    </ol>
  </li>
  <li>
    <p tabindex="0">Letter Spacing</p>
    <ol type="a">
      <p tabindex="0">Be sure to leave space between letters and words. Selecting a font family with fixed-width can help with word spacing. Avoid overcrowding your text as words and letters will be difficult to identify.</p>
      <p tabindex="0">Examples:</p>
      <p tabindex="0">Fixed-width font: <code>font-family: monospace;</code></p>
      <p tabindex="0">Proportional font: <code>font-family: sans-serif;</code></p>
      <p tabindex="0">Overcrowded spacing: <code>letter-spacing: -1.5px;</code></p>
    </ol>
  </li>
  <li>
    <p tabindex="0">Dividing Text into Columns</p>
    <ol type="a">
      <li>
        <p tabindex="0">If you are writing longer articles dividing your text into columns increases comprehension as it requires less eye movement. Readers do not have to use their peripheral vision as often if text is broken into columns.</p>
        <p tabindex="0">Using frameworks like <a href="https://getbootstrap.com/" target="_blank">Bootstrap<i class="fas fa-external-link-alt"></i></a> make grid systems easy and accessible</p>
        <p tabindex="0">Example:</p>
        <code tabindex="0"><xmp><div class="container">
  <div tabindex="0" class="row">
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      One of three columns
    </div>
  </div>
</div></xmp></code>
        <p tabindex="0">The code above creates this:</p>
        <div class="container">
          <div tabindex="0" class="row">
            <div tabindex="0" class="col-sm" style="border: 1px solid black;">
              One of three columns
            </div>
            <div tabindex="0" class="col-sm" style="border: 1px solid black;">
              One of three columns
            </div>
            <div tabindex="0" class="col-sm" style="border: 1px solid black;">
              One of three columns
            </div>
          </div>
        </div>
      </li>
    </ol>
  </li>
</ol>
