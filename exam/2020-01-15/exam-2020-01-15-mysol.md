## Exame 2020-01-15

### Question 4
What is the difference between `.value` and `.getAttribute('value')` after someone fills a text input with "pai natal"?

- `.value = "pai natal"`, `.getAttribute('value') = "pai natal"`
- `.value = "pai natal"`, `.getAttribute('value') = null` :heavy_check_mark:

### Question 7
What is the issue of using a single salt for all users?

- Two users with the same password have the same hash :heavy_check_mark:
- Given two passwords, one can find the salt
- ?
- ?

### Information

Given this piece of HTML:
```html
<section id="stuff">
  <article class="first">
    <p class="first">Text 1</p>
    <p class="last">Text 2</p>
  </article>
  <article class="last">
    <p class="first">Text 3</p>
    <p class="last">Text 4</p>
  </article>
</section>
```

and the following CSS rules:
```css
section p.first     { color: green   }  /* R1 */
.first > .first     { color: blue    }  /* R2 */
article + .last p   { color: red     }  /* R3 */
#stuff              { color: magenta }  /* R4 */
section[id=stuff] p { color: inherit }  /* R5 */
#stuff > .last      { color: yellow  }  /* R6 */
```

### Question 9
0,0,1,2

### Question 10
0,0,2,0

### Question 11
0,0,1,2

### Question 12
0,1,0,0

### Question 13
0,0,1,2

### Question 14
0,1,1,0

### Question 15
What is the color of Text 3?

yellow

### Question 19

`/t(.+?)\b.*\1/`

```txt
She saw Sherif's shoes on [the sofa. But was she so sure those were Sherif's shoes she] saw?
```
