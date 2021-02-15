function create_item(){
  console.log("creating item...")
  let item_name = document.querySelector("#item_name").value
  
  // check if there are items already in localStorage
  if( localStorage.items ){
    console.log("yes items already there")
    // items is just text, but looks like an array, so convert it to an array
    const items = JSON.parse(localStorage.items) // converts text into array
    items.push(item_name)
    // save it to the localStorage, but this is an array... we need text
    localStorage.items = JSON.stringify(items)
  }else{
    console.log("no, items not there. It is empty")
    const items = []
    items.push(item_name) // ["a","b","c"]
    // convert the items array into an items "array" text
    items_array_as_text = JSON.stringify(items)
    // save the items text in localStorage
    localStorage.items = items_array_as_text
  }
}