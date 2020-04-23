 export async function fetchPlacePage(){
    const response = await fetch('/api/get-places');
    const json = await response.json();
    return json;
}
