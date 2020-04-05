export async function getMenus(){
    const response = await fetch('/api/get-menus');
    const json = await response.json();
    return json;
}