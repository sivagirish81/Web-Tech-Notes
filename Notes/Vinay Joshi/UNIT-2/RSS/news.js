function init()
{
	obj = new News();
	obj.divinner = document.getElementById("inner");
	obj.divinner.style.left = window.innerWidth - 5 + "px";
	
	obj.scroll();
	setTimeout(obj.getNews,5000);
}

function News()
{
	this.getNews = function()
	{
		xhr = new XMLHttpRequest();
		xhr.onreadystatechange = obj.processNews;
		xhr.responseType="document";
		xhr.open("GET", "http://localhost/rss/getnews.php", true);
		//xhr.open("get","https://www.globalhungerindex.org/issues-in-focus/atom.xml")
		//xhr.open("GET", "https://www.craigslist.org/about/best/all/index.rss");
		xhr.send();
	}
	
	this.processNews = function()
	{
		if(this.readyState == 4 && this.status == 200)
		{
			root = this.responseXML.documentElement;
			
			items = root.getElementsByTagName("entry");
			obj.divinner.innerHTML = "";
			console.log(this.responseXML);
			for (i in items){
				//get title and link
				title = items[i].getElementsByTagName("title")[0];
				ilink = items[i].getElementsByTagName("link")[0];
				
				//Create an anchor
				var anchor = document.createElement("a");
				anchor.innerHTML = title.firstChild.nodeValue+"  ";
				anchor.href = ilink.getAttribute("href");
				anchor.style.display="inline";
				anchor.style.leftMargin="10px";
				obj.divinner.appendChild(anchor);
				//obj.divinner.style.display="inline";
			}
		}
	}
	
	this.scroll = function()
	{
		if(obj.divinner.offsetLeft + obj.divinner.offsetWidth < 2)
		{
			obj.divinner.style.left = window.innerWidth - 5 + "px";
		}
		
		else
		{
			obj.divinner.style.left = obj.divinner.offsetLeft - 4 + "px";
		}
		
		setTimeout(obj.scroll, 20);
	}
}