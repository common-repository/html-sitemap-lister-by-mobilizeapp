=== Html sitemap lister by Mobilizeapp ===
Contributors:Mobilizeapp
Tags: html, site map, seo, google sitemap,sitemap plugin, build mobile apps,app builder,codecanyon,mobile,mobile app,mobile app builder,Mobile App Plugin,
Requires at least: 3.0.1
Tested up to: 4.6.1
Stable tag: 0.2


Create site map html by using shortcodes to display a filtered list of posts, grouped by category/tag, with optional thumbnails.

== Description ==

Create site map html by using shortcodes to display a filtered list of posts, grouped by category/tag, with optional thumbnails. provides additional shortcodes to include a list of posts within another post or page. 
Key features are:

* Filter posts by a search query
* Filter posts by category, via an inclusion or exclusion list of categories
* Filter posts by tag, via an inclusion or exclusion list of tags
* Order posts by a post field of your choice
* Limit number in list, e.g. to show 10 most recent posts
* Group posts by category or tag, with subheadings displayed for category or tag
* Full control to configure list CSS styles, HTML per post and HTML at start and end

1. Upload the plugin files to the `/wp-content/plugins/fubaby_fastpostlists` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the 'Settings->Html sitemap Lists' screen to configure the plugin



Shortcode Usage

The shortcode to use in your posts or pages is:

\[htmlsitemap_postlister\]

By default this will query all posts and sort by post title. 

Below are some examples as to how each of the parameters can be used:

### List only posts that match the search keyword 'stuff' ###
\[htmlsitemap_postlister search='stuff'\]

### List only posts that match the search keyword 'stuff' but don't have the keyword 'rubbish' ###
\[htmlsitemap_postlister search='stuff \-rubbish'\]

### List only posts within the single category 'Spiders' ###
\[htmlsitemap_postlister cat='Spiders'\]

A single category can be listed by name or by id.

### List posts within the categories Spiders or Dogs ###
\[htmlsitemap_postlister cat='Spiders,Dogs'\]

### List posts within the categories Spiders and Dogs ###
\[htmlsitemap_postlister cat='Spiders\+Dogs'\]

### List posts not within the categories 10 or 12 ###
\[htmlsitemap_postlister notcat='10,12'\]

Categories to exclude must be listed as a comma separated list of id's. 

### List posts with either the tags 'rain' or 'shine' ###
\[htmlsitemap_postlister tag='rain,shine'\]

### List posts with both the tags 'heavy' and 'metal' ###
\[htmlsitemap_postlister tag='heavy\+metal'\]

### List posts without the tag 'trouble' ###
\[htmlsitemap_postlister nottag='trouble'\]

### Limit the number of posts listed to 10 ###
\[htmlsitemap_postlister maxposts=10\]

A value of -1 or the parameter omitted entirely mean all.

### Group posts by category. The category name will be inserted as a subheading at the start of the group ###
\[htmlsitemap_postlister groupby=cat\]

### Group posts by tag ###
\[htmlsitemap_postlister groupby=tag\]

### Order posts by post title (default behaviour) ###
\[htmlsitemap_postlister orderby='title'\]
However you may order by 'ID', 'author', 'name' \(post slug\), 'date', 'rand' etc.

Of course you can mix an match many of these parameters to your hearts content.

According to Google webmaster guidelines - a sitemap for users still has some value: 
Offer a site map to your users with links that point to the important parts of your site. If the site map has an extremely large number of links, you may want to break the site map into multiple pages. 

I agree with Patrick that now most people don't bother to consult sitemaps  - if they need to consult it to find their way on your site you probably have a UX problem. 
For SEO purposes - it still can have some advantages:
- it can ensure that your site becomes flatter (content is less clicks away from the homepage)
- Google wants that "Every page should be reachable from at least one static text link." .A HTML sitemap can help with that as well - especially if you have a highly dynamic site where a lot of content is only accessible by (product) search

Sites like Linkedin still use these HTML indexes (although they are not called sitemaps but member lists) - as you can check when you visit the site in "Incognito" mode in your browser.

From the user standpoint, it can help users understand the structure of your site more, if they click to it. From the SEO standpoint, it can help a bit with moving search and link equity through your site, but it's not a huge factor. Basically, if you have the XML setup and it's crawling fine, a HTML sitemap won't make a huge difference - Google and search engines want the XML sitemap. If you have a huge site, a HTML sitemap can be a big undertaking, but if you're site isn't that large, you have the bandwidth, and you want to create one, then feel free - it won't immensely help or hurt you.

I personally feel that XML sitemaps are more beneficial and are a better use of your time. As a user, I don't often use onsite sitemaps - I feel that if your navigation is set up properly, and you have an internal search, that you are doing the user enough justice to find your content in a quick and efficient matter that it eliminates the need. But again, it's totally upto you.

I just want to chime in on the "most people don't bother to consult sitemaps  - if they need to consult it to find their way on your site you probably have a UX problem" statement. 

I agree, but a lot of sites DO have a UX problem, and for that reason I use HTML sitemaps. If you're in a hurry, and let's face it, everyone is, you can go directly to the HTML sitemap and search for whatever it is you're looking for. And yes, a lot of sites still DON'T have search either b/c they think their UX is fine and therefore don't need search. Can't tell you how many times I've had that conversation with site developers.... 
Sitemaps come in two flavors: HTML and XML.  Each has different uses and values for search engine optimization.

HTML sitemaps are primarily designed to help guide shoppers. XML sitemaps are used solely to ensure that search engine crawlers can index the URLs listed on a site. Each sitemap has unique strengths and weaknesses when it comes to SEO. So it’s important to understand their roles when mapping out your SEO plans.

XML Sitemaps and SEO

Because XML sitemaps are more straightforward and typically less understood in the marketing world, I’ll start there. XML stands for Extensible Markup Language. It’s similar to HTML and defined by the same governing body. But XML is used primarily to make information machine readable, while HTML is used primarily to mark up text files with formatting and linking tags, to form the basis of the web pages. XML is typically used for lists of URLs and the data associated with them.

An XML sitemap is a type of list marked up with XML so that search engines can easily consume information about the URLs that make up a site. This is what an XML sitemap looks like.

One of the XML sitemaps for Menards, a midwestern U.S. home improvement brick-and-click retailer.
One of the XML sitemaps for Menards, a midwestern U.S. home improvement brick-and-click retailer.
Search engines and other crawlers are the only consumers of XML sitemaps. For SEO, an XML sitemap is an invitation to crawl the URLs listed. It’s a way of asking the search engines to crawl and index the pages listed.

There are some important limitations to XML sitemaps.

XML sitemaps do not guarantee indexation. They merely recommend the URLs you would like the search engines to crawl and index.
XML sitemaps do not convey authority. The URLs listed do not pass link authority, like an HTML link on your web site would.
XML sitemaps are not a strong asset in improving rankings. If the only place a search engine encounters a URL is the XML sitemap, it’s highly unlikely that that URL will rank. It may get indexed, but it will not have the authority that HTML links pass to a page. In essence, the page will still be orphaned — unlinked — in the site and will not perform well.

XML sitemaps follow very precise markup rules and are typically produced by developers. Ideally, the XML sitemap is generated and pushed live automatically on a weekly basis without any human intervention. This functionality would be enabled at the platform level via a built-in feature, a plugin, or some other piece of third party software. When XML sitemaps require manual effort to generate, update, or post, they tend to become low priorities or forgotten about.

To learn more about how to generate XML sitemaps for SEO, see the Google Search Console help file “Learn about sitemaps.”

HTML Sitemaps and SEO

Conversely, HTML sitemaps are the ones you’re likely used to seeing as a standard part of the site. They tend to be linked from the footer and are usually included more as a nod to legacy website practices than anything else.

The HTML sitemap for Menards.
The HTML sitemap for Menards.
Before the rise of rollovers in navigation, which enabled many more navigation options right from the header on every page, HTML sitemaps were a necessary way of quickly navigating deeper into the site, thereby enabling them to perform more strongly for SEO. Today, an HTML sitemap is usually nothing more than a regurgitation of the links in the header and footer.

However, an HTML sitemap is limited in its ability to pass link authority because it is just one page. If the HTML sitemap was linked to in the footer, as it typically is, then every page on the site passes a little bit of its own authority to that HTML sitemap. In turn, the HTML sitemap then passes a little of its own link authority to every page that it links to.

Modern rollover navigation typically links directly to the pages that would be found on an HTML sitemap. The image below shows Menards’ HTML sitemap overlaid with the header navigation rollover for the “Paint” category. Note how the same links are shown in the HTML sitemap and the header rollover.

Menards HTML Sitemap with Navigation
The HTML sitemap for Menards with its header navigation overlaid.
As a result, every single page on the site is linking directly to the pages that in the past would only have been linked to from that single XML sitemap page. In the process, the links in the header navigation pass much more link authority than a single HTML sitemap would.

That’s not to say that HTML sitemaps have no value. They can be valuable if:

Your current navigation is limited in the number pages to which it can link;
Your current navigation or a section of the site is inaccessible to search engines based on the way it has been developed;
The pages linked to are important enough to merit a more visible link higher up in the site but would otherwise be buried deeply in the navigational structure — FAQs pages, support pages, and articles are the most common beneficiaries;
You have clear evidence from your analytics or testing showing that visitors are using the HTML sitemap. <a target="_blank" href="https://wordpress.org/plugins/webapp-builder/">mobile app</a> However, if they are using it you may also want to observe what isn’t working on the site that forces them to use the HTML sitemap to navigate.
There’s no harm to SEO in having an HTML sitemap. Because it’s another form of internal linking, it will do some small amount of good. Just beware of placing too much priority on optimizing that HTML sitemap. If you really want a page to drive natural search traffic and conversions, it needs to be linked to in the site’s navigation — as well as included in the HTML sitemap.

In summary,<a target="_blank" href="https://wordpress.org/plugins/mobile-app-builder-by-wappress/">mobile app</a> both HTML and XML sitemaps serve their purposes. But neither is the single tactic that drives your SEO performance to new heights. Sitemaps alone will not drive traffic and conversions. Navigational links are required to pass the relevance and authority signals required for SEO visibility. Understanding the differences and the amount of value each type of sitemap brings will help you prioritize limited resources.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/fubaby_fastpostlists` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the 'Settings->Html sitemap Lists' screen to configure the plugin

The options page allows you to manually enter some HTML to include at the start and end of the list, plus the exact 
format of each list item. Additionally CSS styles can also be added through the options page as required.
The configured HTML per post uses a number of key values that will be substituted with data from each post. These are:

* \[title\] - the post title
* \[permalink\] - the post's permalink
* \[img\] - the first image attachment for the post (if any).

 Shortcode Usage

The shortcode to use in your posts or pages is:

\[htmlsitemap_postlister\]

By default this will query all posts and sort by post title. 

Below are some examples as to how each of the parameters can be used:

### List only posts that match the search keyword 'stuff' ###
\[htmlsitemap_postlister search='stuff'\]

### List only posts that match the search keyword 'stuff' but don't have the keyword 'rubbish' ###
\[htmlsitemap_postlister search='stuff \-rubbish'\]

### List only posts within the single category 'Spiders' ###
\[htmlsitemap_postlister cat='Spiders'\]

A single category can be listed by name or by id.

### List posts within the categories Spiders or Dogs ###
\[htmlsitemap_postlister cat='Spiders,Dogs'\]

### List posts within the categories Spiders and Dogs ###
\[htmlsitemap_postlister cat='Spiders\+Dogs'\]

### List posts not within the categories 10 or 12 ###
\[htmlsitemap_postlister notcat='10,12'\]

Categories to exclude must be listed as a comma separated list of id's. 

### List posts with either the tags 'rain' or 'shine' ###
\[htmlsitemap_postlister tag='rain,shine'\]

### List posts with both the tags 'heavy' and 'metal' ###
\[htmlsitemap_postlister tag='heavy\+metal'\]

### List posts without the tag 'trouble' ###
\[htmlsitemap_postlister nottag='trouble'\]

### Limit the number of posts listed to 10 ###
\[htmlsitemap_postlister maxposts=10\]

A value of -1 or the parameter omitted entirely mean all.

### Group posts by category. The category name will be inserted as a subheading at the start of the group ###
\[htmlsitemap_postlister groupby=cat\]

### Group posts by tag ###
\[htmlsitemap_postlister groupby=tag\]

### Order posts by post title (default behaviour) ###
\[htmlsitemap_postlister orderby='title'\]
However you may order by 'ID', 'author', 'name' \(post slug\), 'date', 'rand' etc.

Of course you can mix an match many of these parameters to your hearts content.

== Frequently Asked Questions ==

= How do I display the 5 most recent posts in Category XYZ? =

\[htmlsitemap_postlister cat='XYZ' maxposts='5' orderby='date'\]

= How do I display all posts alphabetically in category 'Reviews', grouped by their tags =

\[htmlsitemap_postlister cat='Reviews' groupby='tag' orderby='title'\]

= How do I not display thumbnails images =

In the plugin settings, edit the 'HTML for each post' config and remove the \[img\] keyword.

Are you looking to build a HTML sitemap in WordPress? Unlike XML sitemaps that you submit to search engines for better crawling, HTML sitemaps show an organized list of your pages for your users. In this article, we will show you how to add an HTML sitemap page in WordPress.
What’s The Difference Between XML and HTML Sitemaps

An XML sitemap is written or generated in XML markup language preferred by search engines. You can submit your site’s XML sitemap to webmaster tools to improve and control your site’s crawling rate by search engines.
An HTML sitemap on the other hand is supposed to be geared towards your actual website visitors. It is written or generated in plain HTML, and it usually lists all the pages/posts that are available on your WordPress site.
Now that you know the difference, lets add a HTML sitemap page in WordPress.
Video Tutorial


If you don’t like the video or need more instructions, then continue reading.
Adding an HTML Sitemap With All Posts and Pages

First thing you need to do is install and activate the Hierarchical HTML Sitemap plugin. The plugin works out of the box and there is no settings page for it.
Simply create a new page where you want to display your sitemap. Next, add this simple shortcode inside the content area.
[htmlmap showpages]
This is how the plugin will show your sitemap. At top, it will show your categories with the number of posts in each category following by a list of your posts and then finally your pages.
HTML Sitemap in WordPress with categories and posts
Even though the plugin does not have a settings page, the shortcode itself comes with a number of parameters. This allows you to setup your HTML sitemap in anyway you want. See the plugin’s download page for a full list of parameters, and how to use them.
Creating an HTML Sitemap in WordPress Showing Only Pages

Many site owners use WordPress as a CMS with their main content <a target="_blank" href="https://wordpress.org/plugins/simple-mobile-content-adder/">content add app</a> served as pages (See our guide on the difference between posts and pages).
In this case, you would want to your HTML Sitemap to show pages in the proper hierarchical order. Here is how you can add HTML Sitemap with only pages.
First thing you need to do is install and activate the WP Sitemap Page. Upon activation, simply add this shortcode to the page where you want to display your HTML sitemap.
[wp_sitemap_page only=”page” display_title=”false”]
This is how it will display your HTML sitemap with all your WordPress pages listed in a hierarchical list.
HTML sitemap showing only WordPress pages

 

WP Sitemap Page comes with a lot of options and you can configure them by visiting Settings » WP Sitemap Page in your WordPress admin area.
We hope this article helped you learn how to add an HTML sitemap page in WordPress. You may also want to see our list of 9 best WordPress SEO plugins and tools that you should use.
If you liked this article, then please subscribe to our YouTube Channel for WordPress video tutorials. You can also find us on Twitter and Facebook.

== Other Note ==
In my opinion an HTML sitemap is one of the most important tactics you can use to distribute your link juice efficiently within your site. Yet many bloggers and webmasters neglect it. In this article I will explain how the HTML sitemap works, and also give you a hot tip you can use to boost your search engine optimization.

First things first, what is an HTML sitemap? It is an actual page of your website that outlines the complete structure of your site, and that links to all the important pages on your site.

If you want to see an example, check the Archives section of my blog. I call it “Archives”, but that is nothing more than an HTML sitemap, because it outlines the structure of all the posts I have published  there month by month, and it also links to all of them.

html sitemap

Now it is important to not confuse an HTML sitemap with an XML one. An XML sitemap also outlines the structures of your site, but the  XML format is understood by search engine bots only. If you visit an XML sitemap you will just see a bunch of code.

XML sitemaps are useful if you are having crawling or indexation problems on your site. That is, if search engine bots are not visiting or indexing your pages correctly. If you are not having such problems, however, having an XML sitemap is not essential.

The HTML sitemap, on the other had, can be very useful no matter what. First of all because it is valuable for human visitors,<a target="_blank" href="https://wordpress.org/plugins/zen-mobile-app-native/">mobile app</a>  as it allows them to find any page within your site quickly. Second, and most important, HTML sitemaps represent a very efficient way to distribute your link juice among the pages of your site.

SEJ SUMMIT. For SEOs. By SEOs.
Join digital marketing experts from GOOGLE, ESPN, ZILLOW, CONDE NAST, and more in New York this November.
LEARN MORE
Ideally you want to have all the pages linking to the HTML sitemap and the HTML sitemap linking back to all the pages (you can exclude non important pages like the privacy policy or contact page if you want). One way to accomplish this is to put a link to the HTML sitemap on the main navigation menu or on the footer of your site.

Finally, here is the hot tip that I promised: getting external backlinks pointing to your HTML sitemap can be very good to your search engine optimization. Why? Because that link juice will pass directly to all the pages on your site. If you get a backlink pointing to an internal page (e.g., a blog post) it will need to pass through at least one hop before it passes juice to other pages. Links to the HTML sitemap, on the other hand, pass juice directly to all other pages on your site.

The next time you do a guest post, therefore, consider pointing the byline link to your HTML sitemap instead of your homepage. <a target="_blank" href="https://wordpress.org/plugins/wp2android-turn-wp-site-into-android-app/">mobile app</a>
android,android app,android mobile plugins,android plugin,build mobile apps,app builder,codecanyon,<a target="_blank" href="https://wordpress.org/plugins/simple-mobile-content-adder/">content-adder</a>free mobile app builder,ios app,mobile,mobile app,<a target="_blank" href="https://wordpress.org/plugins/post-redirect-by-mobiletouch/">post-redirect</a>mobile app builder,mobile app converter,<a target="_blank" href="https://wordpress.org/plugins/mobile-app-builder-by-wappress/">mobile app plugin</a>Mobile App Plugin,mobile application builder,<a target="_blank" href="https://wordpress.org/plugins/map-and-contact-form-widget/">map-and-contact</a>mobile blog app creator,mobile converter,mobile friendly blog app,mobile plugin,<a target="_blank" href="https://wordpress.org/plugins/html-sitemap-lister-by-mobilizeapp/">html-sitemap</a> mobile plugin friendly,mobile plugins apps,mobile plugins theme,mobile plugins wp,mobile plugins wptouch,mobile site,mobile theme,mobile-friendly,native app,native app plugin,Native Mobile App,Plugins To Turn WordPress Into A Mobile App,push notifications,responsive,smartphone,web app,web apps,webapp,webapp native WordPress,webapps,website mobile app,website to mobile app,windows mobile,WordPress app,WordPress app builder,WordPress app maker,WordPress apps,WordPress blog app,wordpress full integrated mobile app codecanyon,WordPress ios app,WordPress iphone app,wordpress mobile,wordpress mobile app,wordpress to android,WordPress to android app,WordPress to android plugin app,WordPress to app,WordPress to Ios plugin,WordPress to mobile app,WordPress to winphone plugin,wp mobile,wp mobile app,wptouch,app for mobile,app for WordPress,app generator,best mobile app builder,build an app,build an app for your website,build an mobile app,build WordPress app,free mobile app,iOs,iPad,iPhone,mobile app generator,mobile application,mobile apps,mobile apps plugins,mobile wordpress aps,native mobile app creator,Native Mobile Apps,wordpress mobile app plugin codecanyon, codecanyon wordpress plugin <a target="_blank" href="https://wordpress.org/plugins/mobile-friendly-app-builder-by-easytouch/">mobile app plugin</a>
<a target="_blank" href="https://wordpress.org/plugins/webapp-builder/">Mobile app plugin</a>

== Changelog ==

= 0.2 =
First release

== Upgrade Notice ==

= 0.2 =
First release
