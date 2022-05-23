package com.example.mondeafpa;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {
    public static final String EXTRA_MESSAGE = "com.example.mondeafpa.MESSAGE";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }

    public void lancerDe(View view){
        Intent intent = new Intent(this, DisplayDeLance.class);
        EditText editText = (EditText) findViewById(R.id.editTextNumber);
        int face = Integer.parseInt(editText.getText().toString());
        intent.putExtra("int_value",face);
        startActivity(intent);
    }
}