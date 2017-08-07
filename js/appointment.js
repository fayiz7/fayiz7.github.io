var addrow=function(event){
	var row=document.createElement('tr');
	var seq=document.createElement('td');
	var name=document.createElement('td');
	var recnumber=document.createElement('td');
	var clinic=document.createElement('td');
	var doctor=document.createElement('td');
	var pattype=document.createElement('td');
	var date=document.createElement('td');
	var mobile=document.createElement('td');
	var action=document.createElement('td');
	var del = document.createElement('button');
	
	seq.innerHTML=view.childElementCount+1;
	name.innerHTML=pname.value;
	recnumber.innerHTML=prnum.value;
	clinic.innerHTML=pclinic.value;
	doctor.innerHTML=pdoctor.value;
	pattype.innerHTML=ptype.value;
	date.innerHTML=pdate.value;
	mobile.innerHTML=pmobile.value;
	del.innerHTML="Delete";
	del.addEventListener('click',function(){
	if(confirm('Are you sure, ypu to delete this row?')){
		this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);		}
	});
	action.classList.add('center');
    action.appendChild(del);
	
	row.appendChild(seq);
	row.appendChild(name);
	row.appendChild(recnumber);
	row.appendChild(clinic);
	row.appendChild(doctor);
	row.appendChild(pattype);
	row.appendChild(date);
	row.appendChild(mobile);
	row.appendChild(action);
	
	view.appendChild(row);
	myform.reset();	
	
};