package edu.uw.iguest.lighthouse;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

public class State extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_state);
    }

    public void next(View view) {
        Intent intent = new Intent(State.this, Optional.class);
        startActivity(intent);
    }
}
