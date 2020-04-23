import React, {useEffect, useState} from 'react';
import {fetchPlacePage} from "../../../api/getPlace";
import PlacePage from "../elements/PlacePage";

const Place = () => {
    const [items, setItems] = useState(null);
    useEffect(() => {
        const fetchData = async () => {
            const dataItems = await fetchPlacePage();
            setItems(dataItems);
        };
        fetchData();
        return () => {
            setItems(null);
        }
    }, []);

    return (
        <>
            {
                items &&(
                    <PlacePage
                        data={items}
                    />
                )
            }
        </>
    )
};

export default Place;