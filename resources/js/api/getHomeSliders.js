export async function fetchHomeSliders(){
    const response = await fetch('/api/get-home-slider');
    const object =  await   response.json();
    return    object;
}

