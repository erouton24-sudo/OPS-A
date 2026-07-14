<style>
body{
    margin:0;
    background:#0b1220;
    color:white;
    font-family:Arial,Helvetica,sans-serif;
}
.sidebar{
    position:fixed;
    left:0;
    top:0;
    width:240px;
    height:100vh;
    background:#111827;
    border-right:1px solid #334155;
    padding:22px 14px;
}
.logo{
    font-size:28px;
    font-weight:bold;
    margin-bottom:35px;
}
.menu a{
    display:block;
    color:white;
    text-decoration:none;
    padding:14px 16px;
    border-radius:8px;
    margin-bottom:10px;
    background:#1e293b;
}
.menu a:hover{
    background:#2563eb;
}
.main{
    margin-left:270px;
    padding:35px;
}
.header,.panel{
    background:#1e293b;
    border:1px solid #334155;
    border-radius:12px;
    padding:32px;
    margin-bottom:24px;
}
.green{
    color:#22c55e;
    font-weight:bold;
}
.yellow{
    color:#facc15;
    font-weight:bold;
}
.red{
    color:#f87171;
    font-weight:bold;
}
.card{
    background:#0f172a;
    border:1px solid #334155;
    border-radius:10px;
    padding:18px;
    margin-bottom:14px;
}
.grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:18px;
}
input,select,textarea{
    width:100%;
    padding:13px;
    margin:8px 0 16px 0;
    border-radius:8px;
    border:1px solid #334155;
    background:#0f172a;
    color:white;
    font-size:15px;
    box-sizing:border-box;
}
button{
    background:#2563eb;
    color:white;
    border:none;
    padding:13px 20px;
    border-radius:8px;
    font-weight:bold;
    cursor:pointer;
}
table{
    width:100%;
    border-collapse:collapse;
    margin-top:18px;
}
th,td{
    text-align:left;
    padding:14px;
    border-bottom:1px solid #334155;
}
th{
    color:#94a3b8;
}
a{
    color:#60a5fa;
}
@media(max-width:900px){
    .grid{
        grid-template-columns:1fr;
    }
}
</style>