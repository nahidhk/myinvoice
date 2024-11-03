function rcvdata(){
    window.location.href="/rcv"
}

async function displayData(searchInput = "") {
 
    try {
      const response = await fetch("/src/api/api.php");
      const data = await response.json();
      const dataContainer = document.getElementById("app");
      if (!dataContainer) {
        throw new Error("Element with id 'app' not found.");
      }
  
      dataContainer.innerHTML = "";
  
  
      const filteredData = data.filter(
        (item) =>
          item.id.toLowerCase().includes(searchInput.toLowerCase()) ||
          item.name.toLowerCase().includes(searchInput.toLowerCase()) ||
          item.phone.toLowerCase().includes(searchInput.toLowerCase()) ||
          item.product.toLowerCase().includes(searchInput.toLowerCase()) 
      );
  
   
    
      filteredData.forEach((item) => {
        
        const itemElement = document.createElement("tr");
        itemElement.innerHTML = `
    <td style=" text-align: center;
  font-size: 35pt;">
    ${item.id}
    </td>
    <td>
        <span class="n">Customere Name</span>: ${item.name}<br>
        <span class="n">Customere phone</span>: ${item.phone}<br>
        <span class="n">Customere Address</span>: ${item.address}
    </td>
    <td style=" text-align: center;
  font-size: 18pt;">
    ${item.product}
    </td>
    <td>
        <i class="n">Receved Date</i>: ${item.rdate}<br>
        <i class="n">Conforim Date</i>: ${item.cdate}<br>
        <i class="n">Delivered Date</i>: ${item.ddate}<br>

    
    </td>
    <td style="display: flex;">
        <div>
        <button onclick="window.location.href='/bill/?id=${item.id}'" class="btn"><i class="fa-solid fa-sack-dollar"></i></button>
       </div>
       <div>
        <span class="n">Total Bill</span>: ${item.bill}<br>
        <span style="color:green"><b> <span class="n">Totall Paid</span>: ${item.paid}<br></b></span>
        <span class="n">Less</span>: ${item.less}<br>
        <span class="n">Due</span>: ${item.due}<br>
       </div>
      
    </td>
    <td>
        <div style="display: flex;">
        <div>
            <button style="background-color:#${item.color};" class="btn">${item.type}</button>
        </div>
        <div style="display:${item.cssd3} ;">
        <button onclick="window.location.href='/src/php/cln.php?id=${item.id}'" style="background-color: red;" class="btn"><i class="fa-solid fa-ban"></i></button>
        <button onclick="window.location.href='/src/php/ss.php?id=${item.id}'" style="background-color: rgb(13, 229, 24)" class="btn"><i class="fa-regular fa-circle-check"></i></button>
     
        
    </div>
    <div style="display: ${item.cssd2};">
       <button onclick="window.location.href='/src/php/d.php?id=${item.id}'" style="background-color: #fca805" class="btn"><i class="fa-solid fa-truck"></i></button>
       </div>
     <button onclick="window.location.href='/src/php/p.php?id=${item.id}'" class="btn"><i class="fa-solid fa-print"></i></button>
</div>
    </td>
    </tr>
     
              `;
  
        dataContainer.appendChild(itemElement);
      });
    } catch (error) {
      console.error("data error", error);
    }
  }
  

  function searchData() {
    const searchInput1 = document.querySelector("#search").value;
    displayData(searchInput1);
    window.location.href ="#" + searchInput1 ;
  }
  function mydata(){
    document.querySelector("#search").value="";
    searchData()
  }
  displayData();
  