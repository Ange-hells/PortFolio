if(!votes_init_funcs)
{
	var votes_init_funcs = true;
    var votes_urlimg = new Array();
    var votes_urlimgh = new Array();
    var votes_auto = new Array();
    function votes_hover(id,i)
    {
    	for(j=1;j<=5;j++)
        {
        	if(j<=i)
    	    {
	        	document.getElementById('votes_'+id+'_img_'+j).src=votes_urlimgh[id];
            }
            else
            {
	        	document.getElementById('votes_'+id+'_img_'+j).src=votes_urlimg[id];
            }
        }
    }
    function votes_unhover(id)
    {
    	for(j=1;j<=5;j++)
        {
        	if(j<=votes_auto[id])
    	    {
	        	document.getElementById('votes_'+id+'_img_'+j).src=votes_urlimgh[id];
            }
            else
            {
	        	document.getElementById('votes_'+id+'_img_'+j).src=votes_urlimg[id];
            }
        }
    }
    function votes_voter(id,i)
    {
	    votes_auto[id] = i;
        var js_effets=document.createElement('script');
        js_effets.setAttribute('type', 'text/javascript');
        js_effets.setAttribute('src', 'http://services.supportduweb.com/votes/voter-'+id+'-'+i+'.js');
        document.getElementsByTagName('script')[0].parentNode.insertBefore(js_effets,document.getElementsByTagName('script')[0]);
    }
}
votes_urlimg['44164'] = 'http://services.supportduweb.com/images/votes/s3.png';
votes_urlimgh['44164'] = 'http://services.supportduweb.com/images/votes/s3h.png';
var votes_codesimgs = '';
votes_auto[44164] = 0;
for(i=1;i<=5;i++)
{
	votes_codesimgs += '<img src="'+votes_urlimg['44164']+'" alt="'+i+'" onclick="votes_voter(44164, '+i+');" onmouseover="votes_hover(44164, '+i+');" onmouseout="votes_unhover(44164);" id="votes_44164_img_'+i+'" />';
}
document.getElementById('votes_44164').innerHTML = votes_codesimgs+'<br /><span id="votes_44164_txt">Moy. 2/5(1 votes)</span>';
votes_unhover(44164);
