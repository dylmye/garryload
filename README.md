# garryload v0.2
A basic loading screen using only javascript, html and image(s).

## setup - for complete noobs
Shove this repo onto your server.  
Go into load.html and change the following lines:  
`var APIkey = "APIKEYHERE";` - change the *APIKEYHERE* to the key you get [here.](http://steamcommunity.com/dev/registerkey)  
`var YourServer = "SERVERNAMEHERE";` - change the *SERVERNAMEHERE* to the name you want people to see for your server.

You'll see a bunch of lines saying  
```html
<section id="rules">  
  <ul>  
    <li>Rule A</li>   
</section>
```
You'll want to change the "Rule A" text to your first rule, then you can paste the `<li>...</li>` to make more rules.

For every map your server has you'll want to make a image with the same name of the map, as a `jpg` file. For example, I've included the "cs_office.jpg" and "ttt_community_bowling.jpg" files for their maps. A backup "background.jpg" is used if no image with the name of the map is found.

I didn't include a loading graphic as they're usually wrong and already shown at the bottom of the screen whilst loading anyway.

## why php?  
A small amount of code *has* to be PHP. This is at the fault of Steam (looking at you, Gaben) who refuse to use the JSONP language, the only workaround (other than Access-Control-Allow-Origin: *) of the outdated "security" feature browsers use, CORS - this prevents servers not on the same domain (ie yours <--> steampowered.com) talking to eachother.
For hosting, I highly recommend Nearly Free Speech for the [Pay-As-You-Go + low cost](https://www.nearlyfreespeech.net/about/faq#BigNumbers) (especially for small servers) 
