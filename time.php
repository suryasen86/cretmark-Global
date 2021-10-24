<script>
    document.getElementById('indiatime').innerHTML=new Date().toLocaleString('en-US',{timeZone:'Asia/Kolkata',timeStyle:'short',hourCycle:'h24'})
    document.getElementById('singaporetime').innerHTML=new Date().toLocaleString('en-US',{timeZone:'Asia/Singapore',timeStyle:'short',hourCycle:'h24'})
    document.getElementById('canadatime').innerHTML=new Date().toLocaleString('en-US',{timeZone:'Canada/Central',timeStyle:'short',hourCycle:'h24'})
    
</script>