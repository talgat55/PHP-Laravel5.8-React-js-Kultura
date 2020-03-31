export async function fetchSettings(){
    const response = await fetch('/api/get-settings');
    const json = await response.json();
    return json;
}