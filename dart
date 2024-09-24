import 'package:flutter/material.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Scaffold(
        body: Center(
          child: SizedBox(
            height: 1000,
            width: 500,
            child: Column(
              children: [
                Row(
                  children: [
                    Column(
                      children: [
                        Container(
                          height: 125,
                          width: 125,
                          color: Colors.pink,
                        ),
                        Container(
                          height: 125,
                          width: 125,
                          color: Colors.red,
                        ),
                      ],
                    ),
                    Container(
                      height: 250,
                      width: 125,
                      color: Colors.yellow,
                    ),
                    Container(
                      height: 250,
                      width: 250,
                      color: Colors.deepPurple[900],
                    ),
                  ],
                ),
                Row(
                  children: [
                    Container(
                      height: 250,
                      width: 250,
                      color: Colors.green,
                    ),
                    Container(
                      height: 250,
                      width: 125,
                      color: Colors.yellow,
                    ),
                    Column(
                      children: [
                        Container(
                          height: 125,
                          width: 125,
                          color: Colors.red,
                          child: Row(
                            children: [
                              Column(
                                children: [
                                  Container(
                                    height: 62.5,
                                    width: 62.5,
                                    color: Colors.red,
                                  ),
                                  Container(
                                    height: 62.5,
                                    width: 62.5,
                                    color: Colors.red,
                                  ),
                                ],
                              ),
                              Column(
                                children: [
                                  Row(
                                    children: [
                                      Container(
                                        height: 62.5,
                                        width: 31.25,
                                        color: Colors.white,
                                      ),
                                      Column(
                                        children: [
                                          Container(
                                            height: 31.25,
                                            width: 31.25,
                                            color: Colors.black,
                                          ),
                                          Container(
                                            height: 31.25,
                                            width: 31.25,
                                            color: Colors.green,
                                          ),
                                        ],
                                      ),
                                    ],
                                  ),
                                  Container(
                                    height: 62.5,
                                    width: 62.5,
                                    color: Colors.red,
                                  ),
                                ],
                              ),
                            ],
                          ),
                        ),
                        Container(
                          height: 125,
                          width: 125,
                          color: Colors.pink,
                        ),
                      ],
                    ),
                  ],
                ),
                Row(
                  children: [
                    Container(
                      height: 500,
                      width: 250,
                      color: Colors.red,
                    ),
                    Column(
                      children: [
                        Container(
                          height: 250,
                          width: 250,
                          color: Colors.grey,
                        ),
                        Row(
                          children: [
                            Container(
                              height: 250,
                              width: 125,
                              color: Colors.purple,
                            ),
                            Column(
                              children: [
                                Container(
                                  height: 125,
                                  width: 125,
                                  color: Colors.yellow,
                                ),
                                Container(
                                  height: 125,
                                  width: 125,
                                  color: Colors.green,
                                ),
                              ],
                            ),
                          ],
                        ),
                      ],
                    ),
                  ],
                ),
              ],
            ),
          ),
        ),
      ),
    );
  }
}
