import React from 'react';
import styled from 'styled-components';
import PropTypes from 'prop-types';
import Title from "../Title/Title";
import Item from "./Item";

const PlacePage = ({data}) => {

    return (
        <PlacePageComponent>
            <div className="container">
                <div className="row">
                    <Title
                        title="Места"
                    />
                </div>
                <div className="row">
                    <ul className="news-list row">
                        {
                            data.map((item, index) => (
                                <Item
                                    key={index}
                                    name={item.name}
                                    image={item.image}
                                    slug={item.slug}
                                />
                            ))
                        }
                    </ul>
                </div>
            </div>
        </PlacePageComponent>
    )
};
PlacePage.propTypes = {
    data: PropTypes.object
};

const PlacePageComponent = styled.section`
  margin: 40px 0;

`;
export default PlacePage;
