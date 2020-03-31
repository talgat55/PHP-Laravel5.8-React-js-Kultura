import React from 'react';
import {render} from 'react-dom';
import {Provider} from 'react-redux';
import {applyMiddleware, compose, createStore} from "redux";
import createSagaMiddleware from 'redux-saga'
import {introSaga} from './sagas/sagas'
import {rootReducer} from "./redux/rootReducer";
import Client from "./Client";
const saga = createSagaMiddleware();
const store = createStore(
    rootReducer,
    compose(
        applyMiddleware(
            saga,
        ),
        window.__REDUX_DEVTOOLS_EXTENSION__ && window.__REDUX_DEVTOOLS_EXTENSION__()
    )
);
saga.run(introSaga);
render(
    <Provider store={store}>
        <Client/>
    </Provider>
    , document.getElementById('root'));

